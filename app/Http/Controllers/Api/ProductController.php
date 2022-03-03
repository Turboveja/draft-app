<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ImageRepository;
use App\Http\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        //Validations
        $validator = Validator::make($request->all(), [
            'text_filter' => 'nullable|string|max:250',
        ]);

        if ($validator->fails()) {
            $wrap = wrap_api_response_v1([
                $validator->getMessageBag(),
                422,
                'Validation data error',
            ]);
            return response()->api_custom_response($wrap);
        }

        //Get items
        $rows = (new ProductRepository())->index($request->text_filter, (bool)$request->pagination);

        //Response
        $wrap = wrap_api_response_v1(
            $rows,
            200,
            $request->text_filter ? 'List filtered by: ' . $request->text_filter : 'List',
            []
        );

        return response()->api_custom_response($wrap);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validations
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products|max:255',
            'images' => 'nullable|array',
            'images.*' => 'file|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            $wrap = wrap_api_response_v1([
                $validator->getMessageBag(),
                422,
                'Validation data error',
            ]);
            return response()->api_custom_response($wrap);
        }

        \DB::beginTransaction();
        try {
            //Store item
            $name = $request->name;
            $item = (new ProductRepository())->store($name);

            //Adds images to relation
            $images = $request->images ?: [];
            if (count($images)) {
                $image_repository = new ImageRepository();
                foreach ($request->images as $image) {//Store image
                    $image_repository->store($image, $item);
                }
            }

            //Load relation
            $item->load('images');


            \DB::commit();
        } catch (\Exception $ex) {
            \DB::rollback();

            $wrap = wrap_api_response_v1([
                $ex->getMessage(),
                400,
                'Exception',
            ]);

            \Log::channel('crud_logger')->error([
                'wrap_response' => $wrap,
                'exception' => $ex
            ]);

            return response()->api_custom_response($wrap);
        }

        //Response
        $wrap = wrap_api_response_v1(
            $item,
            200,
            'New item',
            []
        );

        return response()->api_custom_response($wrap);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO add vinkla hashids encrypt

        try {
            //Get item
            $row = (new ProductRepository())->find($id);
        } catch (\Exception $ex) {
            $wrap = wrap_api_response_v1([
                $ex->getMessage(),
                400,
                'Generic Exception',
            ]);

            \Log::channel('crud_logger')->error([
                'wrap_response' => $wrap,
                'id' => $id,
                'exception' => $ex
            ]);

            return response()->api_custom_response($wrap);
        }

        //Response
        $wrap = wrap_api_response_v1(
            $row,
            200,
            'Get item',
            []
        );

        return response()->api_custom_response($wrap);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validations
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products|max:255',
            'images' => 'required_if:change_images,true|array',
            'images.*' => 'file|mimes:jpg,jpeg,png',
            'change_images' => 'boolean'
        ]);

        if ($validator->fails()) {
            $wrap = wrap_api_response_v1([
                $validator->getMessageBag(),
                422,
                'Validation data error',
            ]);
            return response()->api_custom_response($wrap);
        }

        \DB::beginTransaction();
        try {
            //Item
            $name = $request->name;
            $item = (new ProductRepository())->update($id, $name);

            //Link images if exists
            if ($item) {
                //Update images to relation
                if ($request->change_images) {
                    //Delete actual images
                    (new ProductRepository())->flushImages($id);

                    //Add new images
                    $image_repository = new ImageRepository();
                    foreach ($request->images as $image) {//Store image
                        $image_repository->store($image, $item);
                    }
                }

                //Load relation
                $item->load('images');
            }


            \DB::commit();
        } catch (\Exception $ex) {
            \DB::rollback();

            $wrap = wrap_api_response_v1([
                $ex->getMessage(),
                400,
                'Exception',
            ]);

            \Log::channel('crud_logger')->error([
                'wrap_response' => $wrap,
                'id' => $id,
                'exception' => $ex
            ]);

            return response()->api_custom_response($wrap);
        }

        //Response
        $wrap = wrap_api_response_v1(
            $item,
            200,
            'Updated item',
            []
        );

        return response()->api_custom_response($wrap);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //Delete item
            (new ProductRepository())->delete($id);
        } catch (\Exception $ex) {
            $wrap = wrap_api_response_v1([
                $ex->getMessage(),
                400,
                'Generic Exception',
            ]);

            \Log::channel('crud_logger')->error([
                'wrap_response' => $wrap,
                'id' => $id,
                'exception' => $ex
            ]);

            return response()->api_custom_response($wrap);
        }

        //Response
        $wrap = wrap_api_response_v1(
            null,
            200,
            'Item deleted',
            []
        );

        return response()->api_custom_response($wrap);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function updateCategories(Request $request, $id)
    {
        //Validations
        $validator = Validator::make($request->all(), [
            'categories' => 'required_if:override_categories,true|array',
            'categories.*' => 'string|exists:categories,id',
            'override' => 'boolean'
        ]);

        if ($validator->fails()) {
            $wrap = wrap_api_response_v1([
                $validator->getMessageBag(),
                422,
                'Validation data error',
            ]);
            return response()->api_custom_response($wrap);
        }

        \DB::beginTransaction();
        try {
            //Item
            $item = (new ProductRepository())->updateCategories($id, $request->categories, $request->override);

            //Load relation
            !$item ?: $item->load('categories');

            \DB::commit();
        } catch (\Exception $ex) {
            \DB::rollback();

            $wrap = wrap_api_response_v1([
                $ex->getMessage(),
                400,
                'Exception',
            ]);

            \Log::channel('crud_logger')->error([
                'wrap_response' => $wrap,
                'id' => $id,
                'exception' => $ex
            ]);

            return response()->api_custom_response($wrap);
        }

        //Response
        $wrap = wrap_api_response_v1(
            $item,
            200,
            'Updated item',
            []
        );

        return response()->api_custom_response($wrap);
    }
}
