<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalMaterial extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
