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
    public function paginate()
    {
        return EducationalMaterial::paginate(15);
    }
    public function getBestsellers()
    {
        //todo: вместо вывода всех полей нужно добавить выборку по количеству покупок, в задаче не реализована корзина для записи
        return EducationalMaterial::limit(6)->get();
    }

}
