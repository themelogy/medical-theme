<article class="post format-standard">

    <div class="entry-thumbnail">

        <div class="entry-meta-corner">
            <span class="date">
                <time datetime="{{ $post->created_at->toAtomString() }}" class="entry-date">
                    <span>{{ $post->created_at->formatLocalized("%d") }}</span>
                </time>
            </span>
            <span class="comments-link">
                <small>{{ $post->created_at->formatLocalized("%B") }}</small>
            </span>
        </div>

        <img src="{{ $post->present()->firstImage(850,300,'fit',80) }}" alt="{{ $post->title }}">
    </div>

    <div class="post-content">
        <div class="entry-content">
            <header class="entry-header">

                <h2 class="entry-title font-size-24 m-bot-10">
                    <a href="{{ $post->url }}" rel="bookmark">{{ $post->title }}</a>
                </h2>

                <div class="entry-meta">
                    @if(isset($post->author))
                        <span class="author">
                        <i class="rt-icon2-user2 highlight2"></i>
                        <a href="{{ route('blog.author', [$post->author->slug]) }}">{{ $post->author->fullname }}</a>
                    </span>
                    @endif
                    @if(isset($post->category))
                        <span class="categories">
                        <i class="fa fa-folder-open-o hightlight2"></i>
                        <a href="{{ $post->category->url }}">{{ $post->category->name }}</a>
                    </span>
                    @endif
                    @if($post->tags()->exists())
                        <span class="categories-links">
                        <i class="rt-icon2-tag5 highlight2"></i>
                            @foreach($post->tags()->get() as $tag)
                                <a rel="category" href="{{ $tag->url }}">{{ $tag->name }}</a>@if(!$loop->last), @endif
                            @endforeach
                    </span>
                    @endif
                </div>
                <!-- .entry-meta -->

            </header>
            <!-- .entry-header -->

            {!! $post->intro !!}

            <p class="post-button">
                <a href="{{ $post->url }}" class="theme_button color1 inverse">{{ trans('global.buttons.read more') }}</a>
            </p>

        </div>
        <!-- .entry-content -->

    </div>
    <!-- .post-content -->
</article>