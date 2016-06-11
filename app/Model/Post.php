<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $casts = [
        'tags'   => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublish($query)
    {
        return $query->where('publish', 1)
            ->orderBy('created_at', 'DESC');
    }
}
