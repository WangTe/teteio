<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::publish()->ordering()->paginate();
        return view('home')->withPosts($posts);
    }
}
