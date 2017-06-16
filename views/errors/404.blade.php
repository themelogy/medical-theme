@extends('layouts.layout')

@section('breadcrumbs')
    @php
        $title = '404 '.trans('page::messages.page not found');
        seo_helper()->setTitle($title);
    @endphp
    @include('partials.parts.breadcrumbs', ['title'=>$title, 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <section id="content" class="ls section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="not_found">
                        <span class="highlight">404</span>
                    </p>
                    <h2>{{ trans('page::messages.page not found') }}!</h2>
                    <h3 class="thin">
                        <span class="highlight2">{!! trans("themes::messages.404 link error") !!}</span>
                    </h3>
                    <p>
                        <a href="{{ route('homepage') }}" class="theme_button">{{ trans('page::messages.return homepage') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop
