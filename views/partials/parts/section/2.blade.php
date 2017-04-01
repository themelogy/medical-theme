<section id="about" class="ls section_padding_25 columns_padding_25">
    <div class="container">

        <div class="row">


            <div class="col-md-4">

                <h2 class="widget-title">{{ trans('themes::theme.title.services') }}</h2>

                <div class="panel-group" id="accordion">

                    @php $page = Page::find(2); @endphp
                    @foreach($page->children()->get() as $service)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $service->id }}" @if(!$loop->first)class="collapsed" @endif>
                                        {{ $service->title }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $service->id }}" class="panel-collapse collapse @if($loop->first)in @endif">
                                <div class="panel-body">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="{{ $service->present()->firstImage(80,80,'fit',80) }}" alt="{{ $page->title }}">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            {!! \Str::words(\Patchwork\Utf8::toAscii($service->body), 15) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

            <div class="col-md-4">
                <h2 class="widget-title">{{ trans('themes::employee.title') }}</h2>
                <div class="owl-carousel" data-dots="true" data-loop="true" data-autoplay="4000" data-items="1" data-responsive-lg="1" data-responsive-md="1">
                    @foreach(app(\Modules\Employee\Repositories\EmployeeRepository::class)->all() as $employee)
                        <div class="item">
                            <div class="thumbnail">
                                <a href="{{ $employee->url }}">
                                    <img src="{{ $employee->present()->firstImage(400,250,'fit',80) }}" alt="{{ $employee->fullname }}">
                                </a>
                                <div class="caption">
                                    <h3>
                                        <a href="{{ $employee->url }}">{{ $employee->fullname }}</a>
                                    </h3>
                                    <p>{{ $employee->position }}</p>
                                    <p class="text-center social-icons">
                                        <?php $socials = ['facebook', 'instagram', 'twitter', 'google', 'linkedin']; ?>
                                        @foreach($socials as $social)
                                            @if(isset($employee->{$social}))
                                                <a class="soc-{{ $social }}" href="{{ $employee->{$social} }}"
                                                   title="{{ ucfirst($social) }}" data-toggle="tooltip">#</a>
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <h2 class="widget-title">{{ trans('blog::post.title.recent posts') }}</h2>
                <div class="owl-carousel" data-dots="true" data-loop="true" data-autoplay="3000" data-items="1" data-responsive-lg="1" data-responsive-md="1">
                    @foreach(Blog::latest(5) as $latest)
                        <div class="item">
                            <article class="post format-standard">
                                <div class="entry-thumbnail">
                                    <div class="entry-meta-corner">
                                    <span class="date">
                                        <time datetime="{{ $latest->created_at }}" class="entry-date">
                                            <strong class="m-bot-10">{{ $latest->created_at->formatLocalized('d') }}</strong>
                                            {{ $latest->created_at->formatLocalized('F') }}
                                        </time>
                                    </span>
                                    </div>
                                    <img src="{{ $latest->present()->firstImage(400,250,'fit',80) }}" alt="">
                                </div>
                                <div class="post-content" style="padding: 20px;">
                                    <div class="entry-content">
                                        <header class="entry-header">
                                            <h3 class="entry-title m-bot-10" style="font-size: 20px;">
                                                <a href="{{ $latest->url }}" rel="bookmark">{{ $latest->title }}</a>
                                            </h3>
                                        </header>
                                        <!-- .entry-header -->
                                        {{ Str::words(strip_tags($latest->intro),15) }}
                                        <a href="{{ $latest->url }}">{{ trans('global.buttons.read more') }}</a>

                                    </div>
                                    <!-- .entry-content -->

                                </div>
                                <!-- .post-content -->
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>