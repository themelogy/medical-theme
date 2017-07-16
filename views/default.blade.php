@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$page->title, 'breadcrumbs'=>'page'])
@endsection

@php
if(isset($page->parent->children)) $children = $page->parent->children;
@endphp

@section('content')
    <section class="ls section_padding_50">
        <div class="container">
            <div class="row">
                <div class="@if(isset($children)) col-sm-9 @else col-sm-12 @endif">
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

                @if(isset($children))
                <div class="col-sm-3">
                    <div class="widget widget_categories">
                        <ul>
                            @foreach($children as $child)
                                <li>
                                    <a href="{{ $child->url }}" title="{{ $child->title }}">{{ $child->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @php
                    $posts = [];
                    foreach($page->tags as $tag) {
						if(isset($tag->translate('tr')->slug)) {
							foreach(Blog::findByTag($tag->translate('tr')->slug) as $post) {
								 $posts[$post->id] = $post;
							}
						}
                    }
                @endphp

                @if(isset($posts) && count($posts)>0)
                    <div class="col-sm-12">
                        <fieldset>
                            <legend>{{ trans('themes::page.titles.related posts') }}</legend>
                            <ul class="list-style">
                                @foreach($posts as $post)
                                    <li><a href="{{ $post->url }}">{{ $post->title }}</a></li>
                                @endforeach
                            </ul>
                        </fieldset>
                    </div>
                @endif

            </div>
        </div>
    </section>
@stop
