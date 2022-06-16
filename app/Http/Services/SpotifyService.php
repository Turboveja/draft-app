<?php

namespace App\Http\Services;

use App\Models\Album;
use App\Models\AlbumType;
use App\Models\Artist;
use App\Models\ExternalUrl;
use App\Models\Media;
use App\Models\Track;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spotify;

class SpotifyService
{
    /**
     * @param $spotify_artist_id
     * @return Artist
     */
    public function importFullArtist($spotify_artist_id)
    {
        $spotify_artist = Spotify::artist($spotify_artist_id)->get();
        $artist = $this->importArtist($spotify_artist_id, $spotify_artist);

        $spotify_artist_albums = Spotify::artistAlbums($spotify_artist_id)->get();
        $this->importArtistAlbumsAndTracks($spotify_artist_id, $artist->id, $spotify_artist_albums);

        $artist->load('albums.tracks');

        return $artist;
    }

    /**
     * @param $spotify_id
     * @param $spotify_artist
     * @return Artist
     */
    public function importArtist($spotify_id, $spotify_artist)
    {
        //TODO check by spotify ext id if artist already exist
//        $insertOrUpdate = (bool)Artist::whereHas('externalIds', function($f) use ($spotify_id) {
//            $f->where('platform', PLATFORM_SPOTIFY);
//            $f->where('external_code', $spotify_id);
//        })->first();

        //Get the external urls
        $spotify_external_url = @$spotify_artist['external_urls']['spotify'] ?: null;
        if (!$spotify_external_url) {
            $spotify_external_url = @$spotify_artist['href'] ?: null;
        }


        $followers = @$spotify_artist['followers']['total'] ?: 0;
        $images = @$spotify_artist['images'] ?: [];
        $name = @$spotify_artist['name'];
        $slug = Str::kebab($name);

        $artist = Artist::create([
            'uuid' => Str::uuid(),
            'name' => $name,
            'web_slug' => $slug,
        ]);

        //TODO add artist external urls

        //Add the image of artist
        $spotify_artist_image_url = @$spotify_artist['images'][0]['url'];
        if ($spotify_artist_image_url) {
            $this->saveMediaFileToModel($spotify_artist_image_url, $artist, 'artists');
        }

        return $artist;
    }

    /**
     * @param $url
     * @param $model
     * @param $storage_disk
     * @return void
     */
    public function saveMediaFileToModel($url, $model, $storage_disk)
    {
        //Get the image file
        $file = file_get_contents($url);
        $file_extension = 'png';
        $file_name = 'main.' . $file_extension;
        $file_name_path = $model->uuid . '/' . $file_name;

        //Store the file
        $new_file = Storage::disk($storage_disk)->put($file_name_path, $file); //name, file

        $model->medias()->attach([
            Media::create([
                'uuid' => Str::uuid(),
                'path' => $file_name_path,
                'name' => $file_name,
            ])->id
        ]);
    }


    /**
     * @param string $type
     * @return mixed
     */
    private function getAlbumType(string $type)
    {
        switch ($type) {
            case 'album':
                $internal_type = AlbumType::where('uuid', ALBUM_TYPE_LP)->first()->id;
                break;
            case 'single':
                $internal_type = AlbumType::where('uuid', ALBUM_TYPE_SINGLE)->first()->id;
                break;
            default:
                $internal_type = AlbumType::where('uuid', ALBUM_TYPE_LP)->first()->id;
        }

        return $internal_type;
    }

    /**
     * @param $external_artist_id
     * @param $internal_artist_id
     * @param $spotify_artist_albums
     * @return mixed
     */
    public function importArtistAlbumsAndTracks($external_artist_id, $internal_artist_id, $spotify_artist_albums)
    {
        $artist_albums = [];
        $spotify_albums = $spotify_artist_albums['items'];

        //album loop
        foreach ($spotify_albums as $spotify_album) {
            $spotify_album_id = $spotify_album['id']; //to search tracks
            $album = $this->importAlbum($spotify_album, $internal_artist_id);

            //TODO add artist external urls

            //Add the image of the album
            $spotify_album_image_url = @$spotify_album['images'][0]['url'];
            if ($spotify_album_image_url) {
                $this->saveMediaFileToModel($spotify_album_image_url, $album, 'albums');
            }

            $artist_albums[] = $album;

            //Import tracks
            $spotify_tracks = Spotify::albumTracks($spotify_album_id)->get();
            $this->importAlbumTracks($spotify_tracks, $album->id, $internal_artist_id);
        }

        return $artist_albums;
    }

    /**
     * @param $spotify_tracks
     * @param $internal_album_id
     * @param $internal_artist_id
     * @return void
     */
    private function importAlbumTracks($spotify_tracks, $internal_album_id, $internal_artist_id)
    {
        foreach ($spotify_tracks['items'] as $spotify_track) {
            //Internal props
            $images = @$spotify_track['images'];
            $name = @$spotify_track['name'];
            $number = @$spotify_track['track_number'];
            $explicit = @$spotify_track['explicit'];
            $external_url_spotify = @$spotify_track['href'] ?: null;
            $release_date = @$spotify_track['release_date'];

            $track = Track::create([
                'uuid' => Str::uuid(),
                'name' => $name,
                'number' => $number,
                'explicit' => (bool)$explicit,
                'artist_id' => $internal_artist_id,
                'release_date' => $release_date,
            ]);

            //add relations
            //TODO only if create, not update
            $track->albums()->attach($internal_album_id);

            $external_url = ExternalUrl::create([
                'uuid' => Str::uuid(),
                'name' => $name,
                'url' => $external_url_spotify,
                'external_url_type_id' => EXTERNAL_URL_TYPE_SPOTIFY
            ]);

            $track->externalUrls()->attach($external_url);
        }
    }

    /**
     * @param $spotify_album
     * @param $internal_artist_id
     * @return mixed
     */
    public function importAlbum($spotify_album, $internal_artist_id)
    {
        //Internal props
        $album_type_id = $this->getAlbumType(@$spotify_album['album_type']);
        $images = @$spotify_album['images'];
        $name = @$spotify_album['name'];
        $spotify_release_date = @$spotify_album['release_date'];
        $external_url_spotify = @$spotify_album['external_urls']['spotify'] ?: null;


        //Parse the release date
        if (($release_date = DateTime::createFromFormat('Y-m-d', $spotify_release_date)) !== false) {
        } else {
            $release_date = DateTime::createFromFormat('Y', $spotify_release_date);
        }

        //new entity
        $album = Album::create([
            'uuid' => Str::uuid(),
            'name' => $name,
            'artist_id' => $internal_artist_id,
            'album_type_id' => $album_type_id,
            'release_date' => $release_date->format('Y-m-d'),
        ]);

        //add relations
        $external_url = ExternalUrl::create([
            'uuid' => Str::uuid(),
            'name' => $name,
            'url' => $external_url_spotify,
            'external_url_type_id' => EXTERNAL_URL_TYPE_SPOTIFY
        ]);

        $album->externalUrls()->attach($external_url);

        return $album;
    }
}
