@extends('news::layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>trans('themes::news.title'), 'breadcrumbs'=>'news'])
@endsection

@section('news.content')
    @if(count($posts)>0)
        @foreach($posts as $post)
            @include('news::partials._post', [$post])
        @endforeach
    @endif
    <div class="row topmargin_30">
        <div class="col-sm-12">
            @if(count($posts)>0)
                {!! $posts->render('news::pagination.default') !!}
            @endif
        </div>
    </div>
@endsection