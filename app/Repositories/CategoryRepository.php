<?php
namespace App\Repositories;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    public function all()
    {
        return Category::all();
    }

}
