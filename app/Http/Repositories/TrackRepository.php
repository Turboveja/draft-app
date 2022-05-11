<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Interfaces\TrackRepositoryInterface;
use App\Models\Album;
use App\Models\Artist;
use App\Models\ExternalUrl;
use App\Models\ExternalUrlType;
use App\Models\Genre;
use App\Models\Track;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Repository Class
 */
class TrackRepository extends BaseRepository implements TrackRepositoryInterface
{
    /**
     * @var Track
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Track $model
     */
    public function __construct(Track $model)
    {
        $this->model = $model;
    }

    /**
     * Create a model.
     *
     * @param array $payload
     * @return Model
     */
    public function create(array $payload): ?Model
    {
        //uuid transformation
        if($payload['artist_uuid']){
            $artist = Artist::where('uuid', $payload['artist_uuid'])->first();
            $payload['artist_id'] = $artist ? $artist->id : null; //Set new attribute
            unset($payload['artist_uuid']); //Unset old attribute
        }

        $model = $this->model->create($payload);

        return $model->fresh();
    }

    /**
     * @param Track $track
     * @param array $album_uuids
     * @return mixed
     */
    public function addAlbumsByUuids(Track $track, array $album_uuids = [])
    {
        $album_ids = [];

        foreach($album_uuids as $album_uuid){
            $album = Album::where('uuid', $album_uuid)->first();

            if($album){
                $album_ids[] = $album->id;
            }
        }

        return $track->albums()->attach($album_ids);
    }

    /**
     * @param Track $track
     * @param array $album_uuids
     * @return mixed
     */
    public function addGenresByUuids(Track $track, array $genre_uuids = [])
    {
        $album_ids = [];

        foreach($genre_uuids as $genre_uuid){
            $album = Genre::where('uuid', $genre_uuid)->first();

            if($album){
                $album_ids[] = $album->id;
            }
        }

        return $track->genres()->attach($album_ids);
    }

    /**
     * @param Track $track
     * @param array $external_urls
     * @return mixed
     */
    public function addExternalUrls(Track $track, array $external_urls = [])
    {
        $external_url_ids = [];

        //TODO this external url creations should not be here
        $external_url_types = ExternalUrlType::get();
        foreach($external_urls as $external_url_array){
            $new_external_url = ExternalUrl::create([
                'uuid' => Str::uuid(),
                'name' => $external_url_array['name'],
                'url' => $external_url_array['url'],
                'external_url_type_id' => $external_url_types->where('uuid', $external_url_array['external_url_type_uuid'])->first()->id,
            ]);

            if($new_external_url){
                $external_url_ids[] = $new_external_url->id;
            }
        }

        return $track->externalUrls()->attach($external_url_ids);
    }
}
