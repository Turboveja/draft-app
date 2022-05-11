<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseCustomController;
use App\Http\Repositories\Interfaces\ArtistRepositoryInterface;
use App\Http\Requests\Api\ArtistRequest;
use App\Http\Resources\ArtistCollection;
use App\Http\Resources\ArtistResource;
use Illuminate\Support\Str;

class ArtistController extends BaseCustomController
{
    /**
     * @var ArtistRepositoryInterface
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
    public function __construct(ArtistRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->resource = ArtistResource::class;
        $this->resource_collection = ArtistCollection::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArtistRequest $request
     * @return mixed
     */
    public function store(ArtistRequest $request)
    {
        //Parse params
        $params = [
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'origin_country' => $request->origin_country,
            'contact' => $request->contact,
            'web_slug' => $request->web_slug,
            'formed_in' => $request->formed_in,
        ];

        \DB::beginTransaction();

        try {
            $item = $this->storeItem($params);

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
     * @param ArtistRequest $request
     * @param string $uuid
     * @return mixed
     */
    public function update(ArtistRequest $request, string $uuid)
    {
        $params = [
            'name' => $request->name,
            'origin_country' => $request->origin_country,
            'contact' => $request->contact,
            'web_slug' => $request->web_slug,
            'formed_in' => $request->formed_in,
        ];

        return $this->updateItem($uuid, $params);
    }
}
