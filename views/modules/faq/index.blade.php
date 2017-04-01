@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>trans('themes::faq.title'), 'breadcrumbs'=>'faq.index'])
@endsection

@section('content')
    <section id="content" class="ls section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget widget_categories">
                        <h3 class="widget-title">{{ trans('themes::faq.categories') }}</h3>
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ $category->url }}" title="{{ $category->name }}">{{ $category->name }}</a>
                                <span>({{ $category->faqs->count() }})</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="panel-group" id="accordion1">
                        @if(count($faqs)>0)
                            @foreach($faqs as $faq)
                                @include('faq::partials._faq', [$faq])
                            @endforeach
                            <div class="row topmargin_30">
                                <div class="col-sm-12">
                                    {!! $faqs->render('faq::pagination.default') !!}
                                </div>
                            </div>
                        @else
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">×</span>
                                    <span class="sr-only">{{ trans('global.close') }}</span>
                                </button>
                                {{ trans('faq::categories.messages.no faqs') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection