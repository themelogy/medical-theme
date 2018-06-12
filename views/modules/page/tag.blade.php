@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>trans('themes::tags.tag',['tag'=>$tag->name]), 'breadcrumbs'=>'page.tag'])
@endsection

@section('content')
    <section class="ls section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        @forelse($pages as $page)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail" style="min-height:520px;">
                                    <img class="img-thumbnail" src="{{ $page->present()->firstImage(400, 200, 'fit', 80) }}" alt="{{ $page->title }}" />
                                    <div class="caption" style="min-height: 260px;">
                                        <h3 class="m-bot-20">{{ $page->title }}</h3>
                                        <p>{{ strip_tags(str_sentence($page->body, 1)) }}</p>
                                        <p><a href="{{ $page->url }}" class="btn btn-default" role="button">{{ trans('global.buttons.read more') }}</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
