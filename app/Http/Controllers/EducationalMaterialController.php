<?php

namespace App\Http\Controllers;

use App\Models\EducationalMaterial;
use App\Http\Requests\StoreEducationalMaterialRequest;
use App\Http\Requests\UpdateEducationalMaterialRequest;
use App\Repositories\Interfaces\EducationalMaterialRepositoryInterface;
use App\Services\Interfaces\EducationalMaterialServiceInterface;

class EducationalMaterialController extends Controller
{
    private $service;
    private $repository;

    public function __construct(EducationalMaterialRepositoryInterface $repository, EducationalMaterialServiceInterface $service)
    {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index()
    {
        //
        return view('educationalmaterials.educationalmaterials', ['educationalMaterials' => $this->repository->paginate()]);
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
     * @param  \App\Http\Requests\StoreEducationalMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEducationalMaterialRequest $request)
    {
        $this->service->create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationalMaterial  $educationalMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(EducationalMaterial $educationalMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationalMaterial  $educationalMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationalMaterial $educationalMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEducationalMaterialRequest  $request
     * @param  \App\Models\EducationalMaterial  $educationalMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducationalMaterialRequest $request, EducationalMaterial $educationalMaterial)
    {
        $this->service->update($request->validated(),$educationalMaterial);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationalMaterial  $educationalMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationalMaterial $educationalMaterial)
    {
        //
    }
}
