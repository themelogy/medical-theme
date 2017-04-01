<section id="mainteasers" class="cs section_padding_0 columns_padding_0 table_section table_section_lg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 bg_teaser after_cover color_bg_1">
                <img src="{{ Theme::url('images/teaser01.jpg') }}" alt="{{ trans('themes::ask.the doctor').' '.trans('themes::ask.ask') }}">
                <div class="teaser_content media">
                    <div class="media-left">
                        <h4 class="grey media-heading">{{ trans('themes::ask.the doctor') }}</h4>
                        <h3 style="white-space: nowrap;">{{ trans('themes::ask.ask') }}</h3>
                        <a class="theme_button color1 inverse m-top-20 btn-rounded-5" href="#" data-toggle="modal" data-target="#askModal">{{ trans('themes::ask.button') }}</a>
                    </div>
                    <div class="media-body">
                        {!! trans('themes::ask.description') !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 bg_teaser after_cover color_bg_2">
                <img src="{{ Theme::url('images/online_booking.jpg') }}" alt="{{ 'Online '. trans('themes::appointment.title') }}">
                <div class="teaser_content media">
                    <div class="media-left">
                        <h4 class="grey media-heading">Online</h4>
                        <h3>{{ trans('themes::appointment.title') }}</h3>
                        <a class="theme_button color1 inverse m-top-20 btn-rounded-5" target="_blank" href="{{ trans('themes::appointment.url') }}">{{ trans('themes::appointment.button') }}</a>
                    </div>
                    <div class="media-body">
                        <p>{{ trans('themes::appointment.description') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 bg_teaser after_cover color_bg_3">
                <img src="{{ Theme::url('images/teaser02.jpg') }}" alt="{{ trans('themes::guestbook.our patients').' '.trans('themes::guestbook.feedbacks') }}">
                <div class="teaser_content media">
                    <div class="media-left">
                        <h4 class="grey media-heading">{{ trans('themes::guestbook.our patients') }}</h4>
                        <h3>{{ trans('themes::guestbook.feedbacks') }}</h3>
                        <a class="theme_button color1 inverse m-top-20 btn-rounded-5" href="{{ route('guestbook.comment.form') }}">{{ trans('themes::guestbook.leave comment') }}</a>
                        <!-- testimonials indicators -->
                        <div class="topmargin_30">
                            <a class="testimonials-control" href="#carousel-media" role="button" data-slide="prev">
                                <i class="fa fa-angle-left-big"></i>
                            </a>
                            <a class="testimonials-control" href="#carousel-media" role="button" data-slide="next">
                                <i class="fa fa-angle-right-big"></i>
                            </a>
                        </div>
                    </div>

                    <div class="media-body">
                        <div id="carousel-media" class="carousel slide testimonials-carousel" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-media" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-media" data-slide-to="1"></li>
                                <li data-target="#carousel-media" data-slide-to="2"></li>
                            </ol>


                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach(app(\Modules\Guestbook\Repositories\CommentRepository::class)->latest(5) as $review)
                                <div class="item @if($loop->first)active @endif">
                                    <p>
                                        {!! $review->message !!}
                                    </p>
                                    <div class="media">
                                        <div class="media-body p-lft-40">
                                            <h4>{{ $review->fullname }}</h4>
                                            <p>
                                                {{ $review->position }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- eof #carousel-media -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>