@inject('aside', 'App\Services\AsideService')

<div class="aside-index">
    <div class="title">分类</div>
    @foreach($aside->categories() as $v)
    <div class="link"><a href="{{ url('/category/' . $v->id) }}">{{ $v->name }}</a> ({{ $v->num }})</div>
    @endforeach
</div>
<div class="aside-index">
    <div class="title">归档</div>
    @foreach($aside->archives() as $v)
    <div class="link"><a href="{{ url('/archive/' . $v->time) }}">{{ $v->time }}</a> ({{ $v->num }})</div>
    @endforeach
</div>
<div class="aside-index">
    <div class="title">标签</div>
    @foreach($aside->tags() as $tag)
    <span class="tag"><a href="{{ url('/tag/'. urlencode($tag->name)) }}">{{ $tag->name }}</a></span>
    @endforeach
</div>