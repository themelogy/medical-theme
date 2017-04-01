@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$page->title, 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <div class="error-page">
        <h2 class="headline text-red" style="line-height: 0.6; margin-top: 0;"> 500</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> {{ trans('core::core.error 500 title') }}</h3>
            <p>{!! trans('core::core.error 500 description') !!}</p>
        </div>
        <!-- /.error-content -->
    </div>
@stop