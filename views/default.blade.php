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
                        <img class="img-thumbnail" src="{{ $page->present()->firstImage(400, null, 'fit', 80) }}" alt="{{ $page->title }}" />
                    </div>
                    @endif
                    {!! $page->body !!}
                </div>
            </div>
        </div>
    </section>
@stop
