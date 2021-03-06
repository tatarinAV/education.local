<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalMaterial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'type',
        'category_id',
        'image',
        'description',
        'price',
        'file',
    ];
    /**
     * @var mixed
     */
    public function getBestsellers()
    {
        return $this::all();
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
