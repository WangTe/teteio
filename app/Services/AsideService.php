<?php

namespace App\Services;

use App\Model\Category;
use Illuminate\Support\Facades\DB;

class AsideService
{
    public function categories()
    {
        return Category::all();
    }

    public function archives()
    {
        $counts = DB::table('post')
            ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as `time`, count(*) as num")
            ->orderBy('created_at', 'DESC')
            ->groupBy('time')
            ->get();

        return $counts;
    }
}