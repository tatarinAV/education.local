<?php
namespace App\Repositories\Interfaces;

interface EducationalMaterialRepositoryInterface
{
    public function all();
    public function paginate();
    public function getBestsellers();

}
