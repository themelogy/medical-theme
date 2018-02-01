@if($slide = Slide::findBySlug('anasayfa'))
    @if(count($slide)>0)

        <section id="mainslider" class="ls mainslider">
            <div id="layerslider" style="width: 100%; height: 55rem;">

                @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
                    <div class="ls-slide" data-ls="slidedelay: 5500; durationout:24">

                        <!-- slide background -->
                        <img src="{{ $slider->present()->firstImage(null, 600, 'resize', 75) }}" class="ls-bg" alt="{{ $slider->title }}">
                        @if(!empty($slider->title))
                        <p class="ls-slide title hidden-xs hidden-sm" style="top: 40%; left: 50%; white-space: nowrap; font-size: 3rem; font-weight: 300;" data-ls="offsetxin:0;
                                durationin:1200;
                                delayin:200;
                                easingin:easeOutExpo;
                                offsetxout:0;
                                durationout:500;
                                rotateyin:60;
                                transformoriginin:left 50% 0;
                        ">
                            <span class="highlight">{{ $slider->title }}</span>
                        </p>
                        @endif
                        @if(!empty($slider->sub_title))
                        <h3 class="ls-slide sub-title hidden-xs hidden-sm" style="top: 45%; left: 50%; white-space: nowrap;" data-ls="offsetxin:0;
                                durationin:1200;
                                delayin:900;
                                easingin:easeOutExpo;
                                offsetxout:0;
                                durationout:500;
                                rotateyin:60;
                                transformoriginin:right 50% 0;
                        ">
                            <span class="highlight2">{{ $slider->sub_title }}</span>
                        </h3>
                        @endif
                        @if(!empty($slider->content))
                        <p class="ls-slide slide-content" style="top:
                        @if(!empty($slider->sub_title))
                            50%
                        @else
                            45%
                        @endif; left: 50%;
                                white-space: nowrap;" data-ls="offsetxin:-150;
                                durationin:1200;
                                delayin:1400;
                                easingin:easeOutExpo;
                                offsetxout:-250;
                                durationout:500;
                                rotateyin:-90;
                                transformoriginin:right 50% 0;
                        ">
                        <span class="grey">
                            {!! $slider->content !!}
                        </span>
                        </p>
                        @endif

                        @if($slider->link_type != 'none')
                        <div class="ls-slide hidden-xs hidden-sm" style="top:
                        @if( ! empty($slider->sub_title) )
                            55%
                        @elseif( empty($slider->content) && empty($slider->sub_title) )
                            55%
                        @else
                            55%
                        @endif;
                                left: 50%; white-space: nowrap;" data-ls="offsetxin:0;
                                durationin:1600;
                                delayin:2000;
                                easingin:easeOutElastic;
                                offsetxout:left;
                                rotatexin:-90;
                                transformoriginin:50% top 0;
                        ">
                            <a target="{{ $slider->link->target }}" href="{{ $slider->link->url }}" class="theme_button">{{ $slider->link->title }}</a>
                        </div>
                        @endif

                    </div>
                @endforeach

            </div>
        </section>

        @push('js_inline')
        <script>
            $(document).ready(function () {
                //layerSlider
                if (jQuery().layerSlider) {
                    jQuery('#layerslider').layerSlider({
                        showBarTimer: true,
                        showCircleTimer: false,
                        responsive: true,
                        skinsPath: '/themes/medical/vendor/layerslider/skins/'
                    });
                }
            });
        </script>
        @endpush

        @push('css_inline')
        <style>
            @media only screen and (max-width: 1024px) {
                #layerslider {
                    height:35rem !important;
                }
                #layerslider img {
                    height: 35rem !important;
                }
            }
            @media only screen and (max-width: 750px) {
                #layerslider {
                    height:30rem !important;
                }
                #layerslider img {
                    height: 30rem !important;
                }
            }
            @media only screen and (max-width: 500px) {
                #layerslider {
                    height:15rem !important;
                }
                #layerslider img {
                    height: 15rem !important;
                }
            }
        </style>    
        @endpush

    @endif
@endif