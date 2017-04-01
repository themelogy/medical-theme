@extends('layouts.master')

@section('content')
    @include('partials.home.slider.1')

    @include('partials.home.slider-bottom.1')

    @include('partials.parts.section.2')

    @if('load'==1)

        @include('partials.parts.banner.2')

        @include('partials.parts.staff.1')

        @include('partials.parts.featured.2')

        @include('partials.parts.banner.1')

        @include('partials.parts.gallery.1')

        @include('partials.parts.featured.1')

        @include('partials.parts.newsletters.1')

        @include('partials.parts.counter.1')

    @endif
@endsection