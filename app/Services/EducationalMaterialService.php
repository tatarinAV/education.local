<?php
namespace App\Services;
use App\Models\EducationalMaterial;
use App\Services\Interfaces\EducationalMaterialServiceInterface;

class EducationalMaterialService implements EducationalMaterialServiceInterface
{


    public function create()
    {
        return EducationalMaterial::store();
    }

    public function update()
    {
        return EducationalMaterial::update();
    }

    public function delete()
    {
        return EducationalMaterial::delete();
    }
}
