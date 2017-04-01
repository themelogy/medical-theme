@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$faq->title, 'breadcrumbs'=>'faq.category'])
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
                            <div class="row topmargin_30">
                                <div class="col-sm-12">
                                    <h4>{{ $faq->title }}</h4>
                                    {!! $faq->content !!}
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection