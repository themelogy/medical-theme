@extends('layouts.master')

@section('breadcrumbs')
    @include('partials.parts.breadcrumbs', ['title'=>$employee->fullname, 'breadcrumbs'=>'employee.view'])
@endsection

@section('content')
    <section id="content" class="ls section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-thumbnail image-hover"
                         src="{{ $employee->present()->firstImage(800,null,'resize',80) }}"
                         alt="{{ $employee->fullname }}">
                    <h1>{{ $employee->fullname }}</h1>
                    <p class="highlight">{{ $employee->position }}</p>
                    <p class="social-icons">
                        <?php $socials = ['facebook', 'instagram', 'twitter', 'google', 'linkedin']; ?>
                        @foreach($socials as $social)
                            @if(isset($employee->{$social}))
                                <a class="soc-{{ $social }}" href="{{ $employee->{$social} }}"
                                   title="{{ ucfirst($social) }}" data-toggle="tooltip">#</a>
                            @endif
                        @endforeach
                    </p>
                    <ul class="list1 no-bullets">

                        @if($employee->address)
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="highlight size_small">
                                            <i class="rt-icon2-location-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ trans('employee::employees.form.address') }}:</h4>
                                        {!! $employee->address !!}
                                    </div>
                                </div>
                            </li>
                        @endif
                        @if($employee->phone)
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="highlight size_small">
                                            <i class="rt-icon2-phone-outline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ trans('employee::employees.form.phone') }}:</h4>
                                        {!! $employee->phone !!}
                                    </div>
                                </div>
                            </li>
                        @endif
                        @if($employee->fax)
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="highlight size_small">
                                            <i class="rt-icon2-printer2"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ trans('employee::employees.form.fax') }}:</h4>
                                        {{ $employee->fax }}
                                    </div>
                                </div>
                            </li>
                        @endif
                        @if($employee->email)
                            <li>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="highlight size_small">
                                            <i class="rt-icon2-mail2"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Email:</h4>
                                        <a href="mailto:{{ Html::email($employee->email) }}">{{ Html::email($employee->email) }}</a>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>

                </div>

                <div class="col-md-7">

                    @if($employee->description)
                        <div class="description m-bot-30">
                            {!! $employee->description !!}
                        </div>
                    @endif

                    @if($employee->biography || $employee->skills)
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            @if($employee->biography)
                                <li class="active">
                                    <a href="#tab1" role="tab"
                                       data-toggle="tab">{{ trans('themes::employee.biography') }}</a>
                                </li>
                            @endif
                            @if($employee->skills)
                                <li>
                                    <a href="#tab2" role="tab"
                                       data-toggle="tab">{{ trans('themes::employee.skills') }}</a>
                                </li>
                            @endif
                            @if($employee->user()->exists())
                                @if($employee->user->blogposts()->exists())
                                    <li>
                                        <a href="#tab3" role="tab"
                                           data-toggle="tab">{{ trans('themes::employee.articles') }}</a>
                                    </li>
                            @endif
                        @endif
                        <!--
                        <li>
                            <a href="#tab4" role="tab" data-toggle="tab">{{ trans('themes::employee.message') }}</a>
                        </li>
                        -->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content top-color-border bottommargin_30">
                            @if($employee->biography)
                                <div class="tab-pane fade in active" id="tab1">
                                    {!! $employee->biography !!}
                                </div>
                            @endif
                            @if($employee->skills)
                                <div class="tab-pane fade" id="tab2">
                                    {!! $employee->skills !!}
                                </div>
                            @endif
                            @if($employee->user()->exists())
                                @if($employee->user->blogposts()->exists())
                                    <div class="tab-pane fade" id="tab3">
                                        <ul class="media-list">
                                            @foreach($employee->user->blogposts()->orderBy('created_at', 'desc')->get()->take(10) as $article)
                                                <li class="media">
                                                    <a class="media-left" href="{{ $article->url }}">
                                                        <img class="img-thumbnail media-object" src="{{ $article->present()->firstImage(80,80,'fit',80) }}" alt="{{ $article->title }}">
                                                    </a>
                                                    <div class="media-body">
                                                        <p class="post-date media-heading">
                                                            <i class="rt-icon2-calendar2 highlight2"></i> {{ $article->created_at->formatLocalized('%d %B %Y') }}
                                                        </p>
                                                        <h4 class="m-bot-5"><a href="{{ $article->url }}">{{ $article->title }}</a></h4>
                                                        <p>{!! Str::words(strip_tags($article->intro),15) !!}</p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endif
                        @endif
                        <!--
                        <div class="tab-pane fade" id="tab4">
                            <form class="contact-form" method="post" action="/">
                                <p class="contact-form-name">
                                    <label for="name">Adı Soyadı
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" class="form-control" placeholder="Adı Soyadı">
                                </p>
                                <p class="contact-form-email">
                                    <label for="email">E-Posta
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" class="form-control" placeholder="E-Posta">
                                </p>
                                <p class="contact-form-message">
                                    <label for="message">Mesaj</label>
                                    <textarea aria-required="true" rows="8" cols="45" name="message" class="form-control" placeholder="Mesaj"></textarea>
                                </p>
                                <p class="contact-form-submit topmargin40">
                                    <button type="submit" name="contact_submit" class="theme_button">Gönder</button>
                                </p>
                            </form>
                        </div>
                        -->
                        </div>
                        <!-- eof .tab-content -->
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection