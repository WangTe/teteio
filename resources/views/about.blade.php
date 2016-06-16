@extends('common.base')

@section('body')
    @include('common.header')

    <section class="main-content">
        <div class="content-left">
            <div class="postindex">
                <div class="title"><a href="#">关于</a></div>
                <div class="content">
                    <p>
                        <h2>联系方式</h2>
                        博客：<a target="_blank" href="http://tete.io">http://tete.io</a> <br />
                        微博：<a target="_blank" href="http://weibo.com/teteio">http://weibo.com/teteio</a><br />
                    </p>

                    <p>
                        <h2>教育经历：</h2>
                    </p>
                    <p>
                        <h2>工作经历：</h2>
                    </p>
                    <p>
                        <h2>技能：</h2>
                    </p>

                </div>
            </div>
        </div>
        <div class="content-right">
            @include('common.aside')
        </div>
    </section>
@endsection
