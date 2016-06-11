<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
        $cat = Category::find(1);
        dd($cat->num);
    }
}
