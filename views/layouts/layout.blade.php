<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="no-js">
<!--<![endif]-->

<head>
    @include('partials.metadata')
</head>

<body>

@include('partials.parts.ie-fix')
@include('partials.parts.loader')
@include('partials.parts.search')

<div id="canvas">
    <div id="box_wrapper">

        @include('partials.header.top')

        @include('partials.header')

        @yield('breadcrumbs')

        @yield('content')

        @include('partials.footer.3')

        @include('partials.footer.copyrights')

    </div>
</div>

@yield('ask')
@include('partials.scripts')

</body>

</html>