@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$page->title, 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <section class="ls section_padding_50 page_parent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        @foreach($page->children()->get() as $sub)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img class="img-thumbnail" src="{{ $sub->present()->firstImage(null, 250, 'resize', 80) }}" alt="{{ $sub->title }}" style="height:240px;" />
                                    <div class="caption" style="min-height: 260px;">
                                        <h3>{{ $sub->title }}</h3>
                                        <p>{{ strip_tags(str_sentence($sub->body, 1)) }}</p>
                                        <p><a href="{{ $sub->url }}" class="btn btn-default" role="button">{{ trans('global.buttons.read more') }}</a>
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

@push('css_inline')
<style>
    .page_parent .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
    }
    .page_parent .row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
</style>
@endpush
