<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseCustomController extends Controller
{
    /**
     * Repository class
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Paginated or not
        if ($request->page) {
            //Get items
            $rows = $this->repository->allPaginated();
            $resource = new $this->resource_collection($rows);
            $msg = 'Paginated List';
        } else {
            $rows = $this->repository->all();
            $resource = $this->resource::collection($rows);
            $msg = 'Index List';
        }

        //Response
        return response()->api_custom_response(true, $resource, 200, $msg);
    }

    /**
     * @param array $params
     * @param array $transformAttributeFromModel
     * @return mixed
     */
    public function storeItem(array $params = [], array $transformAttributeFromModel = []){
        //Store item
        $item = $this->repository->create($params);

        return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param string $uuid
     * @return \Illuminate\Http\Response
     */
    public function show(string $uuid)
    {
        //Get items
        $row = $this->repository->findByUuid($uuid);
        $resource = new $this->resource($row);

        //Response
        return response()->api_custom_response(true, $resource, 200, 'Show');
    }

    /**
     * @param string $uuid
     * @param array $params
     * @param array $transformAttributeFromModel
     * @return bool
     */
    public function updateItem(string $uuid, array $params = [], array $transformAttributeFromModel = [])
    {
        //Parse uuids
        foreach($transformAttributeFromModel as $attribute_management){
            $model_item = $attribute_management['model']::where($attribute_management['search_key'], $attribute_management['value'])->first();
            $primary_key = (new $attribute_management['model'])->getKeyName();
            $params[$attribute_management['param_new_key']] = $model_item ? $model_item->$primary_key : null;
        }

        $update = $this->repository->updateByUuid($uuid, $params);

        return (bool)$update;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $uuid
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $uuid)
    {
        \DB::beginTransaction();

        try {
            //Store item
            $delete = $this->repository->deleteByUuid($uuid);

            \DB::commit();

            //Response
            return response()->api_custom_response(true, $delete, 200, 'Item deleted');
        } catch (\Exception $ex) {
            \DB::rollback();

            return response()->api_custom_response(false, [], 400, $ex->getMessage(), [
                'class' => __CLASS__,
                'function' => __FUNCTION__,
                'uuid' => $uuid,
                'ex_msg' => $ex->getMessage()
            ]);
        }
    }
}
