@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$page->title, 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <section class="ls section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        @foreach($page->children()->get() as $page)
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail" style="min-height:520px;">
                                        <img class="img-thumbnail" src="{{ $page->present()->firstImage(null, 250, 'resize', 80) }}" alt="{{ $page->title }}" style="height:240px;" />
                                        <div class="caption" style="min-height: 260px;">
                                            <h3>{{ $page->title }}</h3>
                                            <p>{{ strip_tags(str_sentence($page->body, 1)) }}</p>
                                            <p><a href="{{ $page->url }}" class="btn btn-default" role="button">{{ trans('global.buttons.read more') }}</a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
