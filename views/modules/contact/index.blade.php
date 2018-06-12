@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>trans('themes::contact.title'), 'breadcrumbs'=>'contact'])
@endsection

@section('content')
    @include('contact::map')

    <section id="content" class="ls section_padding_75 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 to_animate">
                    <h3 class="module-header font-size-24">{{ trans('themes::contact.contact form') }}</h3>
                    @include('contact::form')
                </div>

                <div class="col-sm-4 to_animate">
                    <h3 class="module-header font-size-24">{{ trans('themes::contact.contact info') }}</h3>
                    <h4>{{ setting('theme::company-name') }}</h4>
                    <ul class="list1 no-bullets">
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="highlight2 size_small">
                                        <i class="rt-icon2-location-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    {!! setting('theme::address') !!}
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="highlight2 size_small">
                                        <i class="rt-icon2-phone-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    {!! setting('theme::phone') !!}<br/>
                                    {!! setting('theme::phone2') !!}<br/>
                                    {!! setting('theme::mobile') !!}
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="highlight2 size_small">
                                        <i class="rt-icon2-printer2"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    {!! setting('theme::fax') !!}
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <div class="highlight2 size_small">
                                        <i class="rt-icon2-mail2"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection