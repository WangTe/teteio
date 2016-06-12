<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Services;

class TestController extends Controller
{
    public function index()
    {
        $a = new Services\AsideService();
        var_dump($a->archives());
    }
}
