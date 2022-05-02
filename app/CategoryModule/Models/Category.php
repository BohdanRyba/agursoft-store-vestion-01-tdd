<?php

namespace App\CategoryModule\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopePublished($query)
    {
        return $query->whereIsActive(true);
    }

    public function getDefaultCategoriesForSeeder()
    {

    }
}
