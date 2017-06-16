<section class="page_copyright ls section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="{{ url(locale()) }}" class="logo vertical_logo grey">
                    <img src="{{ Theme::url('images/logo-'.locale().'.svg') }}" alt="">
                </a>
            </div>
            <div class="col-sm-12 text-center socials">
                <?php $socials = ['twitter', 'facebook', 'google', 'instagram', 'linkedin', 'youtube', 'pinterest']; ?>
                @foreach($socials as $social)
                    @if($link = setting('theme::'.$social))
                        <a href="{{ $link }}" target="_blank" class="color-icon border-icon rounded-icon soc-{{ $social }}"></a>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-12 text-center">
                <p class="font-size-14">{!! trans('themes::theme.copyrights', ['name'=>setting('theme::company-name'), 'url'=>url(locale()), 'date'=>Carbon::now()->format('Y'), 'powered'=>'Qbicom Digital']) !!}</p>
            </div>
            <div class="col-sm-12 text-center font-size-10">
                @if($privacy = Page::findBySlug('gizlilik-politikasi'))
                <a href="{{ $privacy->url }}">{{ $privacy->title }}</a>
                @endif
                @if($terms = Page::findBySlug('hizmet-sartlari'))
                <a href="{{ $terms->url }}">{{ $terms->title }}</a>
                @endif
            </div>
        </div>
    </div>
</section>