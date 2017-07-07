@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$page->title, 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <section class="ls section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if($page->hasImage())
                        <div class="thumbnail pull-right m-lft-20 m-bot-20">
                            <img class="img-thumbnail" src="{{ $page->present()->firstImage(400, null, 'fit', 80) }}" alt="{{ $page->title }}"/>
                        </div>
                    @endif
                    {!! $page->body !!}

                    @foreach($page->tags as $tag)
                        @if($loop->first)
                        <hr/>
                        @endif
                        <a class="button small thin" href="{{ route('page.tag', [$tag->slug]) }}"><span class="label label-default">{{ $tag->name }}</span></a>
                    @endforeach
                </div>

                @foreach($page->tags as $tag)
                    @foreach(Blog::findByTag($tag->slug) as $post)
                        @if($loop->first)
                            <div class="col-sm-12">
                                <fieldset>
                                    <legend>{{ trans('themes::page.titles.related posts') }}</legend>
                                    <ul class="list-style">
                        @endif
                                        <li><a href="{{ $post->url }}">{{ $post->title }}</a></li>
                        @if($loop->last)
                                    </ul>
                                </fieldset>
                            </div>
                        @endif
                    @endforeach
                @endforeach

            </div>
        </div>
    </section>
@stop
