@extends('blog::layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=> trans('themes::blog.author posts', ['author'=>$author->fullname]),
    'breadcrumbs'=>'blog.author'])
@endsection

@section('blog.content')
    @if(count($posts)>0)
        @foreach($posts as $post)
            @include('blog::partials._post', [$post])
        @endforeach
    @endif
    <div class="row topmargin_30">
        <div class="col-sm-12">
            @if(count($posts)>0)
                {!! $posts->render('blog::pagination.default') !!}
            @endif
        </div>
    </div>
@endsection