@extends('common.base')

@section('body')
    @include('common.header')

    <section class="main-content">
        <div class="content-left">
            @foreach($posts as $post)
            <div class="postindex">
                <div class="title">
                    <a href="{{ url("post/{$post->id}") }}">{{ $post->title }}</a>
                </div>
                <div class="info">
                    作者：<a href="#">{{ $post->user->nickname }}</a> &nbsp; {{ $post->created_at->format('Y-m-d') }} &nbsp;
                    浏览：{{ $post->views }}</div>
                <div class="image"><img src=""></div>
                <div class="excerpt">{!! strip_tags($post->excerpt) !!}</div>
                <div class="tag">
                    标签：
                    @foreach((array) $post->tags as $tag)
                    <a href="{{ url('/tag/' . urlencode($tag)) }}">{{ $tag }}</a>
                    @endforeach
                </div>
            </div>
            @endforeach
            <div class="page">
                {{ $posts->render() }}
            </div>
        </div>
        <div class="content-right">
            @include('common.aside')
        </div>
    </section>
@endsection
