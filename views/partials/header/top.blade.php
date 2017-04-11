<section class="page_topline ls ms section_padding_0 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center text-md-left">
                <div class="page_social_icons">
                    <?php $socials = ['twitter', 'facebook', 'google', 'instagram', 'linkedin', 'youtube', 'pinterest']; ?>
                    @foreach($socials as $social)
                        @if($link = setting('theme::'.$social))
                            <a href="{{ $link }}" target="_blank" class="soc-{{ $social }}"></a>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="col-md-9 text-center text-md-right">
                <!--
                <span class="font-size-12">
                    <i class="rt-icon2-pin-alt highlight"></i> {!! strip_tags(setting('theme::address')) !!}
                </span>
                -->
                <span class="font-size-12 phone">
                    <i class="fa fa-phone highlight"></i> {!! setting('theme::phone') !!}
                </span>
                <span class="font-size-12 mail">
                    <i class="fa fa-envelope highlight"></i> <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                </span>

                <div class="dropdown m-lft-10 language">
                    <a class="dropdown-toggle p-bot-0 m-bot-0" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Dil Seçiniz">
                        <span class="flag-icon flag-icon-{{ LaravelLocalization::getCurrentLocale() == "en" ? "us" : LaravelLocalization::getCurrentLocale() }}"></span> {{ LaravelLocalization::getCurrentLocale() }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu margin-0 padding-0" style="top: 90%; font-size: 13px;">
                        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                            <li @if($locale==LaravelLocalization::getCurrentLocale()) class="active" @endif>
                                @php
                                    switch (Request::route()->getName()) {
                                        case 'page':
                                        $url = $page->present()->url($locale);
                                        break;
                                        case 'news.slug':
                                        case 'blog.slug':
                                        $url = $post->present()->url($locale);
                                        break;
                                        case 'news.category':
                                        case 'blog.category':
                                        $url = $category->present()->url($locale);
                                        break;
                                        case 'store.product.slug':
                                        $url = $product->present()->url($locale);
                                        break;
                                        case 'store.category.slug':
                                        $url = $category->present()->url($locale);
                                        break;
                                        case 'employee.view':
                                        $url = $employee->present()->url($locale);
                                        break;
                                        default:
                                        $url = null;
                                        break;
                                    }
                                    $localizedUrl = LaravelLocalization::getLocalizedURL($locale, $url);
                                @endphp

                                <a lang="{!! $locale !!}" href="{{ $localizedUrl }}"><span class="flag-icon flag-icon-{{ $locale == "en" ? "us" : $locale }}"></span> {!! $supportedLocale['native'] !!}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @if($currentUser)
                    {!! Html::link(route('dashboard.index'), trans('dashboard::dashboard.name'), ['target'=>'_blank', 'class'=>'m-lft-10 font-size-12'])  !!}
                @endif

            </div>

        </div>
    </div>
</section>