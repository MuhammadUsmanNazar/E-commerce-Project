<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'svg_icon',
    ];

    // Relationships
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}