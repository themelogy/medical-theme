@extends('layouts.layout')

@section('breadcrumbs')
    @php
        $title = '500 Sistem Hatası';
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
                        <span class="highlight">500</span>
                    </p>
                    <h2>Sistem Hatası!</h2>
                    <h3 class="thin">
                        <span class="highlight2">Hatayla ilgili site yöneticisine bilgi verebilirsiniz</span>
                    </h3>
                    <p>
                        <a href="{{ route('homepage') }}" class="theme_button">{{ trans('page::messages.return homepage') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop
