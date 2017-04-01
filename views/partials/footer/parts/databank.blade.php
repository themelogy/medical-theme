<h3 class="widget-title"><i class="fa fa-newspaper-o"></i> {{ trans('themes::news.title') }}</h3>
<ul>
    @foreach(News::latest(3) as $latest)
    <li>
        <a href="{{ $latest->url }}">{{ $latest->title }}</a>
    </li>
    @endforeach
</ul>