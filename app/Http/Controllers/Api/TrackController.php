<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseCustomController;
use App\Http\Repositories\ArtistRepository;
use App\Http\Repositories\Interfaces\TrackRepositoryInterface;
use App\Http\Requests\Api\TrackRequest;
use App\Http\Resources\TrackCollection;
use App\Http\Resources\TrackResource;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Support\Str;

class TrackController extends BaseCustomController
{
    /**
     * @var TrackRepositoryInterface
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
    public function __construct(TrackRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->resource = TrackResource::class;
        $this->resource_collection = TrackCollection::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TrackRequest $request
     * @return mixed
     */
    public function store(TrackRequest $request)
    {
        //Parse params
        $params = [
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'number' => $request->number,
            'explicit' => $request->explicit,
            'artist_uuid' => $request->artist_uuid
        ];

        \DB::beginTransaction();
        try {
            $item = $this->storeItem($params);

            //TODO we have to end the album suite development

            //Adds relations
            $this->repository->addAlbumsByUuids($item, $request->album_uuids);
            $this->repository->addGenresByUuids($item, $request->genres_uuids);
            $this->repository->addExternalUrls($item, $request->external_uuids);

            \DB::commit();

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
     * @param TrackRequest $request
     * @param string $uuid
     * @return mixed
     */
    public function update(TrackRequest $request, string $uuid)
    {
        //TODO we have to end the album suite development and the store item dev.

        $params = [
            'name' => $request->name,
            'origin_country' => $request->origin_country,
            'contact' => $request->contact,
            'web_slug' => $request->web_slug,
            'formed_in' => $request->formed_in,
        ];

        \DB::beginTransaction();
        try {
            //Update item
            $this->updateItem($uuid, $params);

            //Update relations

            \DB::commit();

            //Response
            return response()->api_custom_response(true, true, 200, 'Item Updated');
        } catch (\Exception $ex) {
            \DB::rollback();

            return response()->api_custom_response(false, [], 400, $ex->getMessage(), [
                'class' => __CLASS__,
                'function' => __FUNCTION__,
                'params' => $params,
                'uuid' => $uuid,
                'ex_msg' => $ex->getMessage()
            ]);
        }
    }
}
