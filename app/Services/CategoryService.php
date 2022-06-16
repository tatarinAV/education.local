<?php
namespace App\Services;
use App\Models\Category;
use App\Services\Interfaces\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface
{
    public function create()
    {
        return Category::store();
    }

    public function update()
    {
        return Category::update();
    }

    public function delete()
    {
        return Category::delete();
    }

}
