<h3 class="widget-title"><i class="fa fa-newspaper-o"></i> {{ trans('blog::post.title.recent posts') }}</h3>
<ul>
    @foreach(Blog::latest(3) as $latest)
        <li>
            <a href="{{ $latest->url }}">{{ $latest->title }}</a>
        </li>
    @endforeach
</ul>