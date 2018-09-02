@extends('news::layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$post->title, 'breadcrumbs'=>'news.show'])
@endsection

@section('news.content')
    <article class="post type-post with-share-buttons">
        <header class="entry-header">

            <div class="entry-meta">

                <span class="author">
                    <i class="rt-icon2-user2 highlight2"></i>
                    <a href="{{ $post->author->url }}">{{ $post->author->fullname }}</a>
                </span>

                <span class="categories-links">
                    <i class="rt-icon2-tag5 highlight2"></i>
                    <a rel="category" href="{{ $post->category->url }}">{{ $post->category->name }}</a>
                </span>

                <span class="date">
                    <time datetime="2015-03-09T15:05:23+00:00" class="entry-date">
                        <i class="rt-icon2-calendar5 highlight2"></i>
                        {{ $post->created_at->formatLocalized("%d %B %Y") }}
                    </time>
                </span>
            </div>
            <!-- .entry-meta -->

        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            @if($image = $post->present()->firstImage(400, null, 'resize', 80))
            <div class="thumbnail pull-right m-lft-20 m-bot-20">
                <img class="img-thumbnail" src="{{ $image }}" alt="{{ $post->title }}" />
            </div>
            @endif
            {!! $post->content !!}
        </div>

    </article>
@endsection