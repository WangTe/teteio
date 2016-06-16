<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index($id)
    {
        $post = Post::publish()->find($id);
        // 浏览次数增加
        ++$post->views;
        $post->save();
        // 设置title
        $this->setTitle($post->title);
        return view('post')->withPost($post);
    }

    public function category($id)
    {
        $posts = Post::where('category_id', $id)->publish()->ordering()->paginate();
        return view('home')->withPosts($posts);
    }

    public function archive($time)
    {
        $posts = Post::whereRaw("date_format(created_at,'%Y-%m')=?", [$time])->publish()->ordering()->paginate();
        return view('home')->withPosts($posts);
    }

    public function search()
    {
        $keyword = request('keyword');
        if (empty($keyword)) {
            $posts = [];
        } else {
            $posts = Post::where('title', 'like', "%{$keyword}%")->publish()->ordering()->paginate();
        }
        return view('search')->withPosts($posts)->withKeyword($keyword);
    }

    public function tag($tag)
    {
        $posts = Post::whereRaw('JSON_CONTAINS(tags, ?)=1', [json_encode($tag)])->publish()->ordering()->paginate();
        return view('home')->withPosts($posts);
    }
}
