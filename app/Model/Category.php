<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $table = 'category';

    public function getNumAttribute()
    {
        return Post::where('category_id', $this->id)->count();
    }
}
