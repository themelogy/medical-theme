@extends('layouts.master')

@section('breadcrumbs')
    <?php seo_helper()->setTitle(trans('core::core.error 404')) ?>
    @include('partials.parts.breadcrumbs', ['title'=>trans('core::core.error 404').' : '.trans('core::core.error 404 title'), 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <section id="content" class="ls section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="not_found">
                        <span class="highlight">{{ trans('core::core.error 404') }}</span>
                    </p>
                    <h2>{{ trans('core::core.error 404 title') }}</h2>
                    <h3 class="thin">
                        <span class="highlight2">{{ trans('core::core.error 404 description') }}</span>
                    </h3>
                    <p>
                        <a href="{{ Page::findHomepage()->url }}" class="theme_button">{{ Page::findHomepage()->title }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop