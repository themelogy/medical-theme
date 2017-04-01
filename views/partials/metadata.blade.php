{!! seo_helper()->render() !!}
<meta id="token" name="csrf-token" content="{{ csrf_token() }}">

<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="{{ Theme::url('images/favicon.ico') }}">

{!! Theme::style('css/bootstrap.min.css') !!}
{!! Theme::style('css/main.min.css') !!}
{!! Theme::style('css/animations.css') !!}
{!! Theme::style('css/fonts.css') !!}
{!! Theme::style('vendor/layerslider/css/layerslider.css') !!}
{!! Theme::style('vendor/flag-icon-css/css/flag-icon.min.css') !!}
@stack('styles')

{!! Theme::script('js/vendor/modernizr-2.6.2.min.js') !!}
<!--[if lt IE 9]>
{!! Theme::script('js/vendor/html5shiv.min.js') !!}
{!! Theme::script('js/vendor/respond.min.js') !!}
{!! Theme::script('js/vendor/jquery-1.12.4.min.js') !!}
<![endif]-->