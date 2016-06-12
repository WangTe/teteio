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
        // 浏览次数增加
        ++$post->views;
        $post->save();
        // 设置title
        $this->setTitle($post->title);
        return view('post')->withPost($post);
    }

    public function category($id)
    {
        $posts = Post::where('category_id', $id)->publish()->paginate();
        return view('home')->withPosts($posts);
    }

    public function archive($time)
    {
        var_dump($time);
        $posts = Post::whereRaw("date_format(created_at,'%Y-%m')='{$time}'")->publish()->paginate();
        return view('home')->withPosts($posts);
    }
}
