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
}
