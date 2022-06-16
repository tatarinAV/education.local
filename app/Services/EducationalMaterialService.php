<?php
namespace App\Services;
use App\Models\EducationalMaterial;
use App\Services\Interfaces\EducationalMaterialServiceInterface;

class EducationalMaterialService implements EducationalMaterialServiceInterface
{


    public function create($request)
    {
        return EducationalMaterial::store($request);
    }

    public function update($request, $EducationalMaterialId)
    {
        return EducationalMaterial::update($request, $EducationalMaterialId);
    }

    public function delete($EducationalMaterialId)
    {
        return EducationalMaterial::delete($EducationalMaterialId);
    }
}
