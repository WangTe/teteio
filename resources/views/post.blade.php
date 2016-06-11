@extends('common.base')

@section('body')
    @include('common.header')

    <section class="main-content">
        <div class="content-left">
            <div class="postindex">
                <div class="title">
                    <a href="{{ url("post/{$post->id}") }}">{{ $post->title }}</a>
                </div>
                <div class="info">
                    作者：<a href="#">{{ $post->user->nickname }}</a> &nbsp; {{ $post->created_at->format('Y-m-d') }} &nbsp;
                    浏览：{{ $post->views }}</div>
                <div class="image"><img src=""></div>
                <div class="content">{!! $post->content !!}</div>
                <div class="tag">
                    标签：
                    @foreach((array) $post->tags as $tag)
                        <a href="#">$tag</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="content-right">
            @include('common.aside')
        </div>
    </section>
@endsection
