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
        return $query->where('publish', 1);
    }

    public function scopeOrdering($query, $type = 0)
    {
        if ($type == 0) {
            return $query->orderBy('created_at', 'DESC');
        } elseif ($type == 1) {
            return $query->orderBy('created_at', 'ASC');
        } else {
            return $query();
        }
    }
}
