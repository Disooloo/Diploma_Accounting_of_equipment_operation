<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\MainModelRequest;
use App\Http\Resources\MainModelResource;
use App\Models\ModelObject;
use App\Services\MainObjectServices;
use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiMainModelController extends ApiController
{

    public function __construct(MainObjectServices $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return MainModelResource::collection(ModelObject::all());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return MainModelResource
     */
    public function store(MainModelRequest $request)
    {
        $create_main_model = ModelObject::create($request->validated());
        return new MainModelResource($create_main_model);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return MainModelResource
     */
    public function show($id)
    {
        return new MainModelResource(ModelObject::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ModelObject
     */
    public function update(MainModelRequest $request, ModelObject $modelObject)
    {
        $modelObject->update($request->validated());
//        return new MainModelResource($modelObject);
        return $modelObject;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mainModel = ModelObject::findOrFail($id);
        $mainModel->delete();
        return response(null, Response::HTTP_NO_CONTENT); //return 204
    }
}
