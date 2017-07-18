<header class="page_header header_white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-12">
                @if(file_exists(base_path('public/themes/medical/images/logo-'.locale().'.svg')))
                    <a href="{{ url(locale()) }}" class="logo top_logo">
                        <img src="{{ Theme::url('images/logo-'.locale().'.svg') }}" alt="{{ setting('theme::company-name') }}" />
                    </a>
                @else
                    <a href="{{ url(locale()) }}" class="logo top_logo">
                        <img src="{{ Theme::url('images/logo-en.svg') }}" alt="{{ setting('theme::company-name') }}" />
                    </a>
            @endif
            <!-- header toggler -->
                <span class="toggle_menu"><span></span></span>
            </div>
            <div class="col-lg-9 col-md-8 text-right">
                @if(setting('theme::search'))
                    <div class="widget widget_search">
                        <form role="search" method="get" id="searchform" class="searchform form-inline" action="/">
                            <div class="form-group">
                                <input type="text" value="" name="search" id="search" class="form-control" placeholder="">
                                <label class="screen-reader-text" for="search">Search for:</label>
                            </div>
                            <button type="submit" id="searchsubmit" class="theme_button">Search</button>
                        </form>
                    </div>
            @endif
            <!-- main nav start -->
                <nav class="mainmenu_wrapper">
                    {!! Menu::render('header', \Modules\Theme\Presenters\Medical\HeaderMenuPresenter::class) !!}
                </nav>
                <!-- eof main nav -->
            </div>
        </div>
    </div>
</header>