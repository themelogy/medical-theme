@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$page->title, 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <section class="ls section_padding_50">
        @includeWhen($page->parent && @$page->parent->settings->show_menu && !@$page->settings->full_page, 'page::page-with-sidebar', ['page'=>$page])
        @includeWhen($page && @$page->settings->list_page, 'page::page-list', ['page'=>$page])
        @includeWhen($page && !@$page->settings->list_page && !@$page->parent->settings->show_menu, 'page::page', ['page'=>$page])
    </section>
@stop
