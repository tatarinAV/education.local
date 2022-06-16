<?php

namespace App\Http\Controllers;


use App\Repositories\Interfaces\EducationalMaterialRepositoryInterface;


class HomeController extends Controller
{


    private $repository;

    public function __construct(EducationalMaterialRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        //
        return view('home', ['bestsellers' => $this->repository->getBestsellers()]);
    }
}
