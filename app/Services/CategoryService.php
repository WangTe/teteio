<?php

namespace App\Services;

use App\Model\Category;

class CategoryService
{
    public function all()
    {
        return Category::all();
    }
}