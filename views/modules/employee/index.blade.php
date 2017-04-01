@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>trans('themes::employee.title'), 'breadcrumbs'=>'employee.index'])
@endsection

@section('content')
    <section id="content" class="ls section_padding_top_100 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="isotope_container" class="isotope row masonry-layout">
                        @foreach($employees as $employee)
                            @include('employee::partials._employee', [$employee])
                        @endforeach
                    </div>
                    <!-- eof #isotope_container -->

                </div>
            </div>
        </div>
    </section>
@endsection