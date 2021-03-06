<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Interfaces\ArtistRepositoryInterface;
use App\Models\Artist;

/**
 * Repository Class
 */
class ArtistRepository extends BaseRepository implements ArtistRepositoryInterface
{
    /**
     * @var Artist
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Artist $model
     */
    public function __construct(Artist $model)
    {
        $this->model = $model;
    }

    /**
     * @param $uuid
     * @return Artist
     */
    public function getFullInfoArtist($uuid): Artist
    {
        $model = $this->model->with(['medias', 'albums' => function($f){
            $f->with('medias');
            $f->with('genres');
            $f->with('externalUrls');
            $f->with(['tracks' => function($f){
                $f->with('medias');
                $f->with('genres');
                $f->with('externalUrls');
            }]);
        }])
            ->where('uuid', $uuid)
            ->first();

        return $model;
    }
}
