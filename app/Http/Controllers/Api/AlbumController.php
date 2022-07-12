<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseCustomController;
use App\Http\Repositories\Interfaces\AlbumRepositoryInterface;
use App\Http\Requests\Api\AlbumRequest;
use App\Http\Resources\AlbumCollection;
use App\Http\Resources\AlbumResource;
use Illuminate\Support\Str;

class AlbumController extends BaseCustomController
{
    /**
     * @var AlbumRepositoryInterface
     */
    public $repository;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resource_collection;

    /**
     * @param $repository
     */
    public function __construct(AlbumRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->resource = AlbumResource::class;
        $this->resource_collection = AlbumCollection::class;
    }

    /**
     * Display the specified resource.
     *
     * @param string $uuid
     * @return \Illuminate\Http\Response
     */
    public function show(string $uuid, array $relations = [])
    {
        //Get items
        $row = $this->repository->findByUuid($uuid, ['genres', 'externalUrls', 'artist', 'tracks']);
        $resource = new $this->resource($row);

        //Response
        return response()->api_custom_response(true, $resource, 200, 'Show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AlbumRequest $request
     * @return mixed
     */
    public function store(AlbumRequest $request)
    {
        //Parse params
        $params = [
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'artist_uuid' => $request->artist_uuid,
            'album_type_uuid' => $request->album_type_uuid,
            'release_date' => $request->release_date,
        ];

        \DB::beginTransaction();

        try {
            $item = $this->storeItem($params);

            \DB::commit();

            //Adds relations
            $this->repository->addGenresByUuids($item, $request->genres_uuids);
            $this->repository->addExternalUrls($item, $request->external_urls_uuids);

            //Response
            return response()->api_custom_response(true, new $this->resource($item), 200, 'New Item');
        } catch (\Exception $ex) {
            \DB::rollback();

            return response()->api_custom_response(false, [], 400, $ex->getMessage(), [
                'class' => __CLASS__,
                'function' => __FUNCTION__,
                'params' => $params,
                'ex_msg' => $ex->getMessage()
            ]);
        }
    }

    /**
     * @param AlbumRequest $request
     * @param string $uuid
     * @return mixed
     */
    public function update(AlbumRequest $request, string $uuid)
    {
        //TODO relations

        $params = [
            'name' => $request->name,
            'artist_uuid' => $request->artist_uuid,
            'album_type_uuid' => $request->album_type_uuid,
            'release_date' => $request->release_date,
        ];

        return $this->updateItem($uuid, $params);
    }
}
