@extends('layouts.master')

@section('content')
    <section id="content" class="ls m-top-bot-50 blog">
        <div class="container">
            <div class="row">

                <div class="col-sm-9 col-md-9 col-xs-12">
                    @yield('blog.content')
                </div>

                @include('blog::partials.sidebar')

            </div>
        </div>
    </section>
@endsection