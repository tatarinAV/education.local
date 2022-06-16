<?php
namespace App\Services\Interfaces;

use App\Models\EducationalMaterial;

interface EducationalMaterialServiceInterface
{
    public function create($request);
    public function update($request, $EducationalMaterialId);
    public function delete($EducationalMaterialId);

}
