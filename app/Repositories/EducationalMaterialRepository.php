<?php
namespace App\Repositories;
use App\Models\EducationalMaterial;
use App\Repositories\Interfaces\EducationalMaterialInterface;

class EducationalMaterialRepository implements EducationalMaterialInterface
{
    public function all()
    {
        return EducationalMaterial::all();
    }

}
