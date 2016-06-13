@extends('common.base')

@section('body')
    @include('common.header')

    <section class="main-content">
        <div class="content-left">
            <form class="search-bar">
                <input class="search" type="search" placeholder="输入关键词" name="keyword" value="{{ $keyword }}" >
                <button class="search-btn">搜索</button>
            </form>
            @foreach($posts as $post)
                <div class="postindex">
                    <div class="title">
                        <a href="{{ url("post/{$post->id}") }}">{!! highlight($post->title, $keyword) !!}</a>
                    </div>
                    <div class="info">
                        作者：<a href="#">{{ $post->user->nickname }}</a> &nbsp; {{ $post->created_at->format('Y-m-d') }} &nbsp;
                        浏览：{{ $post->views }}</div>
                    <div class="excerpt">{!! strip_tags($post->excerpt) !!}</div>
                    <div class="tag">
                        标签：
                        @foreach((array) $post->tags as $tag)
                            <a href="#">$tag</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <div class="page">
                @if(!empty($posts))
                {{ $posts->render() }}
                @endif
            </div>
        </div>
        <div class="content-right">
            @include('common.aside')
        </div>
    </section>
@endsection
