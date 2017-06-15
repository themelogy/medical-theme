<aside class="col-sm-3 col-md-3 col-xs-12">

    <!--<div class="widget widget_search">
        <h3 class="widget-title">Site Search</h3>
        <form role="search" method="get" class="searchform form-inline" action="/">
            <div class="form-group">
                <label class="screen-reader-text" for="search">Search for:</label>
                <input type="text" value="" name="search" class="form-control" placeholder="Search...">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>-->

    <div class="widget widget_categories">
        <h3 class="widget-title">{{ trans('themes::news.category.title') }}</h3>
        <ul>
            @foreach(NewsCategory::all() as $category)
                <li>
                    <a href="{{ $category->url }}" title="">{{ $category->name }}</a>
                    <span>({{ count(NewsCategory::findBySlug($category->slug)->posts) }})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="widget widget_popular_entries">
        <h3 class="widget-title">{{ trans('themes::news.recent posts') }}</h3>
        <ul class="media-list">
            @foreach(News::latest(5) as $popular)
                <li class="media">
                    <a class="media-left" href="{{ $popular->url }}">
                        <img class="media-object" src="{{ $popular->present()->firstImage(80,80,'fit',80) }}" alt="">
                    </a>
                    <div class="media-body">
                        <p class="post-date media-heading">
                            <i class="rt-icon2-calendar2 highlight2"></i> {{ $popular->created_at->formatLocalized('%d %B %Y') }}
                        </p>
                        <p>
                            <a href="{{ $popular->url }}">{{ $popular->title }}</a>
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="widget widget_tag_cloud">
        <h3 class="widget-title">{{ trans('themes::news.tags') }}</h3>
        <div class="tagcloud">
            @if(Request::route()->getName() == 'news.index')
                @foreach(News::latest(10) as $recent)
                    <?php $tag = $recent->tags()->first(); ?>
                    @if($tag)
                        <a class="button small thin" href="{{ route('news.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
                    @endif
                @endforeach
            @else
                @if(isset($post))
                    @foreach($post->tags as $tag)
                        <a class="button small thin" href="{{ route('news.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
                    @endforeach
                @endif
            @endif
        </div>
    </div>

</aside>