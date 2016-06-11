@extends('common.base')

@section('body')
    @include('common.header')

    <section class="main-content">
        <div class="content-left">
            <div class="postindex">
                <div class="title"><a href="#">我是标题</a></div>
                <div class="info">作者：<a href="#">风格独特</a> &nbsp; 2016-06-01 &nbsp; 浏览：123</div>
                <div class="image"><img src=""></div>
                <div class="content">
                    Gitlab是一个利用 Ruby on Rails 开发的开源应用程序，实现一个自托管的Git项目仓库，可通过Web界面进行访问公开的或者私人项目。
                    它拥有与Github类似的功能，能够浏览源代码，管理缺陷和注释。可以管理团队对仓库的访问，它非常易于浏览提交过的版本并提供一个文件历史库。团队成员可以利用内置的简单聊天程序(Wall)进行交流。它还提供一个代码片段收集功能可以轻松实现代码复用，便于日后有需要的时候进行查找。</div>
                <div class="tag">标签：<a href="#">Linux</a> <a href="#">PHP</a></div>
            </div>
        </div>
        <div class="content-right">
            @include('common.aside')
        </div>
    </section>
@endsection
