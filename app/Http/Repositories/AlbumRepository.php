<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Interfaces\AlbumRepositoryInterface;
use App\Models\Album;
use App\Models\AlbumType;
use App\Models\Artist;
use App\Models\ExternalUrl;
use App\Models\ExternalUrlType;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Repository Class
 */
class AlbumRepository extends BaseRepository implements AlbumRepositoryInterface
{
    /**
     * @var Album
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Album $model
     */
    public function __construct(Album $model)
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
        //uuid transformations
        if($payload['artist_uuid']){
            $to_transform = Artist::where('uuid', $payload['artist_uuid'])->first();
            $payload['artist_id'] = $to_transform ? $to_transform->id : null; //Set new attribute
            unset($payload['artist_uuid']); //Unset old attribute
        }

        if($payload['album_type_uuid']){
            $to_transform = AlbumType::where('uuid', $payload['album_type_uuid'])->first();
            $payload['album_type_id'] = $to_transform ? $to_transform->id : null; //Set new attribute
            unset($payload['album_type_uuid']); //Unset old attribute
        }

        $model = $this->model->create($payload);

        return $model->fresh();
    }

    /**
     * @param Album $album
     * @param array $album_uuids
     * @return mixed
     */
    public function addGenresByUuids(Album $album, array $genre_uuids = [])
    {
        $genre_ids = [];

        foreach($genre_uuids as $genre_uuid){
            $genre = Genre::where('uuid', $genre_uuid)->first();

            if($genre){
                $genre_ids[] = $genre->id;
            }
        }

        return $album->genres()->attach($genre_ids);
    }

    /**
     * @param Album $album
     * @param array $external_urls
     * @return mixed
     */
    public function addExternalUrls(Album $album, array $external_urls = [])
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

        return $album->externalUrls()->attach($external_url_ids);
    }
}
