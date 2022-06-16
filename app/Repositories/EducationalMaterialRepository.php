<?php
namespace App\Repositories;
use App\Models\EducationalMaterial;
use App\Repositories\Interfaces\EducationalMaterialRepositoryInterface;

class EducationalMaterialRepository implements EducationalMaterialRepositoryInterface
{
    public function all()
    {
        return EducationalMaterial::all();
    }

}
