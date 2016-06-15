<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">

    <!-- 响应式相关 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">

    <!-- 浏览器相关 -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">

    <!-- SEO相关 -->
    <meta name="keywords" content="风格独特,teteio,博客,PHP,netpioneer,网协,北京理工大学,信息对抗">
    <meta name="description" content="风格独特,teteio,深夜一杯茶的感觉真好">
    <meta name="generator" content="风格独特">

    <title>{{ $title or ''}} 风格独特</title>
    <link rel="stylesheet" href="{{ static_url('css/app.css') }}">

    @section('css')
    @show

    <script src="{{ static_url('js/vendor.js') }}"></script>

    @section('js')
    @show
</head>
<body>

@section('body')
@show

@include('common.footer')

</body>
</html>