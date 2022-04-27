<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GenreRepository;
use App\Http\Repositories\ImageRepository;
use App\Http\Repositories\Interfaces\GenreRepositoryInterface;
use App\Http\Repositories\ProductRepository;
use App\Http\Requests\Api\GenreRequest;
use App\Http\Resources\GenreResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class GenreController extends Controller
{
    /**
     * @var GenreRepositoryInterface
     */
    private $repository;

    /**
     * @param $repository
     */
    public function __construct(GenreRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Get items
        $rows = $this->repository->all();
        $resource = GenreResource::collection($rows);

        //Response
        return response()->api_custom_response(true, $resource, 200, 'List');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
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
            //Store item
            $item = $this->repository->create($params);
            $resource = new GenreResource($item);

            \DB::commit();

            //Response
            return response()->api_custom_response(true, $resource, 200, 'New Item');
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


    //TODO aquí me quedo

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
