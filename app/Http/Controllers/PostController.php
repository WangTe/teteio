<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index($id)
    {
        $post = Post::find($id);
        $this->setTitle($post->title);
        return view('post')->withPost($post);
    }
}
