@inject('category', 'App\Services\CategoryService')

<div class="aside-index">
    <div class="title">分类</div>
    @foreach($category->all() as $v)
    <div class="link"><a href="#">{{ $v->name }}</a> ({{ $v->num }})</div>
    @endforeach
</div>
<div class="aside-index">
    <div class="title">归档</div>
    <div class="link"><a href="#">2016年1月</a> (12)</div>
    <div class="link"><a href="#">2016年1月</a> (12)</div>
    <div class="link"><a href="#">2016年1月</a> (12)</div>
</div>
<div class="aside-index">
    <div class="title">标签</div>
    <span class="tag"><a href="#">Linux</a></span>
    <span class="tag"><a href="#">PHP</a></span>
    <span class="tag"><a href="#">Laravel</a></span>
</div>