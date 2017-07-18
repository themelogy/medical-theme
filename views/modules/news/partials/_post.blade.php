<article class="post format-standard">

    @if($image = $post->present()->firstImage(850,300,'fit',80))
        <div class="entry-thumbnail">
            <div class="entry-meta-corner">
										<span class="date">
											<time datetime="2014-12-09T15:05:23+00:00" class="entry-date">
												<strong>{{ $post->created_at->format('d') }}</strong>
											</time>
										</span>
                <span class="comments-link">
                                            <strong>
                                                <small>{{ $post->created_at->formatLocalized("%B") }}</small>
                                            </strong>
										</span>
            </div>

            <img src="{{ $image }}" alt="{{ $post->title }}">
        </div>
    @endif

    <div class="post-content">
        <div class="entry-content">
            <header class="entry-header">

                <h2 class="entry-title font-size-24 m-bot-10">
                    <a href="{{ $post->url }}" rel="bookmark">{{ $post->title }}</a>
                </h2>

                <div class="entry-meta">

                    <span class="author">
                        <i class="rt-icon2-user2 highlight2"></i>
                        <a href="{{ route('blog.author', [$post->author->slug]) }}">{{ $post->author->fullname }}</a>
                    </span>

                    <span class="categories">
                        <i class="fa fa-folder-open-o hightlight2"></i>
                        <a href="{{ $post->category->url }}">{{ $post->category->name }}</a>
                    </span>

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
                <a href="{{ $post->url }}" class="theme_button inverse">{{ trans('global.buttons.read more') }}</a>
            </p>

        </div>
        <!-- .entry-content -->

    </div>
    <!-- .post-content -->
</article>