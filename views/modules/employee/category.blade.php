@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$category->name, 'breadcrumbs'=>'employee.category'])
@endsection

@section('content')
    <section id="content" class="ls section_padding_top_100 section_padding_bottom_75">
        <div class="container employee">
            <div class="row">
				@foreach($category->employees()->get() as $employee)
					@include('employee::partials._employee', [$employee])
				@endforeach
            </div>
        </div>
    </section>
@endsection

@push('css_inline')
<style>
.employee .row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display:         flex;
  flex-wrap: wrap;
}
.employee .row > [class*='col-'] {
  display: flex;
  flex-direction: column;
}
</style>
@endpush