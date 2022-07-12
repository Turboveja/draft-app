<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Interfaces\GenreRepositoryInterface;
use App\Models\Genre;

/**
 * Repository Class
 */
class GenreRepository extends BaseRepository implements GenreRepositoryInterface
{
    /**
     * @var Genre
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Genre $model
     */
    public function __construct(Genre $model)
    {
        $this->model = $model;
    }
}
