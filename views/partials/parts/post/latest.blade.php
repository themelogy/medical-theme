<h2 class="widget-title">{{ $slot }}</h2>
<div class="owl-carousel" data-dots="true" data-loop="true" data-autoplay="3000" data-items="1" data-responsive-lg="1" data-responsive-md="1">
    @foreach($posts as $post)
        <div class="item">
            <article class="post format-standard">
                <div class="entry-thumbnail">
                    <div class="entry-meta-corner">
                        <span class="date">
                            <time datetime="{{ $post->created_at }}" class="entry-date">
                                <strong class="m-bot-10">{{ $post->created_at->formatLocalized('%d') }}</strong>
                                {{ $post->created_at->formatLocalized('%B') }}
                            </time>
                        </span>
                    </div>
                    <a href="{{ $post->url }}" rel="bookmark">
                        <img src="{{ $post->present()->firstImage(400,250,'fit',80) }}" alt="{{ $post->title }}">
                    </a>
                </div>
                <div class="post-content" style="padding: 20px;">
                    <div class="entry-content">
                        <header class="entry-header">
                            <h3 class="entry-title m-bot-10" style="font-size: 20px;">
                                <a href="{{ $post->url }}" rel="bookmark">{{ $post->title }}</a>
                            </h3>
                        </header>
                        <!-- .entry-header -->
                        {{ Str::words(strip_tags($post->intro),15) }}
                        <a href="{{ $post->url }}">{{ trans('global.buttons.read more') }}</a>
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- .post-content -->
            </article>
        </div>
    @endforeach
</div>