@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>trans('themes::tags.tag',['tag'=>$tag->name]), 'breadcrumbs'=>'page.tag'])
@endsection

@section('content')
    <section class="ls section_padding_50">
        <div class="container">
            @foreach($pages->chunk(3) as $chunk)
            <div class="row">
                @foreach($chunk as $page)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="{{ $page->url }}"><img class="img-thumbnail" src="{{ $page->present()->firstImage(400, 200, 'fit', 80) }}" alt="{{ $page->title }}" /></a>
                            <div class="caption">
                                <h3 class="m-bot-20"><a href="{{ $page->url }}">{{ $page->title }}</a></h3>
                                <p>{!! ucfirst(Str::words(Str::replaceFirst('tüp bebek', $tag->name.' ', strip_tags(strtolower(html_entity_decode($page->body)))), 20)) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>
@endsection
