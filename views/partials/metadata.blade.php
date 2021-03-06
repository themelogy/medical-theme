{!! seo_helper()->render() !!}
<meta id="token" name="csrf-token" content="{{ csrf_token() }}">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->

<link rel="icon" href="{{ Theme::url('images/favicon.ico') }}">
{!! Theme::style('css/all.min.css') !!}
{!! Theme::script('js/vendor/modernizr-2.6.2.min.js') !!}

@stack('styles')

<!--[if lt IE 9]>
{!! Theme::script('js/vendor/html5shiv.min.js') !!}
{!! Theme::script('js/vendor/respond.min.js') !!}
{!! Theme::script('js/vendor/jquery-1.12.4.min.js') !!}
<![endif]-->