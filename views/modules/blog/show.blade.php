@extends('blog::layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$post->title, 'breadcrumbs'=>'blog.show'])
@endsection

@section('blog.content')
    <article class="post type-post with-share-buttons">
        <header class="entry-header">

            <h1 class="entry-title m-bot-20">
                <a href="{{ $post->url }}" rel="bookmark">{{ $post->title }}</a>
            </h1>

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
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <div class="thumbnail pull-right m-lft-20 m-bot-20">
                <img class="img-thumbnail" src="{{ $post->present()->firstImage(400, 400, 'resize', 80) }}" alt="{{ $post->title }}" />
            </div>
            {!! $post->content !!}

            <div class="row m-top-50">
                <div class="col-md-6">
                    @if($previous = $post->present()->previous)
                        <a class="theme_button color1 inverse"
                           href="{{ $previous->url }}">{{ trans('blog::post.button.previous') }}</a>
                    @endif
                    @if($next = $post->present()->next)
                        <a class="theme_button color1 inverse"
                           href="{{ $next->url }}">{{ trans('blog::post.button.next') }}</a>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="pull-right">
                        @include('partials.social-share', ['url'=>$post->url])
                    </div>
                </div>
            </div>
        </div>

    </article>
@endsection