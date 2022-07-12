<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseCustomController;
use App\Http\Repositories\Interfaces\GenreRepositoryInterface;
use App\Http\Requests\Api\GenreRequest;
use App\Http\Resources\GenreCollection;
use App\Http\Resources\GenreResource;
use Illuminate\Support\Str;

class GenreController extends BaseCustomController
{
    /**
     * @var GenreRepositoryInterface
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
    public function __construct(GenreRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->resource = GenreResource::class;
        $this->resource_collection = GenreCollection::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GenreRequest $request
     * @return mixed
     */
    public function store(GenreRequest $request)
    {
        //Parse params
        $params = [
            'uuid' => Str::uuid(),
            'name' => $request->name
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
     * @param GenreRequest $request
     * @param string $uuid
     * @return mixed
     */
    public function update(GenreRequest $request, string $uuid){
        $params = [
            'name' => $request->name
        ];

        \DB::beginTransaction();

        try {
            //Store item
            $update = $this->repository->updateByUuid($uuid, $params);

            \DB::commit();

            //Response
            return response()->api_custom_response(true, $update, 200, 'Item Updated');
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
