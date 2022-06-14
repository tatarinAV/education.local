<?php

namespace App\Http\Controllers;

use App\Models\EducationalMaterial;
use App\Http\Requests\StoreEducationalMaterialRequest;
use App\Http\Requests\UpdateEducationalMaterialRequest;

class EducationalMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
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
