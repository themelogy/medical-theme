@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$page->title, 'breadcrumbs'=>'page'])
@endsection

@section('content')
    <section class="ls section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if($page->children()->exists())
                    @foreach($page->children()->get() as $child)
                        <h4>{!! $child->title !!}</h4>
                        <img class="img img-thumbnail pull-right m-lft-20 m-bot-20" src="{{ $child->present()->firstImage(450,250,'fit',80,false) }}" />
                        {!! $child->body !!}
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop
