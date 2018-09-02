@isset($slides)
    @if($slides->count()>0)
        <section id="mainslider" class="ls mainslider">
            <div id="layerslider" style="width: 100%; height: 600px;">

                @foreach($slides as $slider)
                    <div class="ls-slide" data-ls="slidedelay: 5500; durationout:24">

                        <!-- slide background -->
                        <img src="{{ $slider->present()->firstImage(1280, 600, 'fit', 50) }}" class="ls-bg" alt="{{ $slider->title }}">
                        <p class="ls-slide title" style="top: {{ $slider->position_x+180 }}px; left: {{ $slider->position_y+380 }}px; white-space: nowrap; font-size: 50px; font-weight: 300;" data-ls="offsetxin:-100;
                                durationin:1200;
                                delayin:200;
                                easingin:easeOutExpo;
                                offsetxout:100;
                                durationout:500;
                                rotateyin:60;
                                transformoriginin:left 50% 0;
                        ">
                            <span class="highlight">{{ $slider->title }}</span>
                        </p>
                        @if(!empty($slider->sub_title))
                            <h3 class="ls-slide sub-title" style="top: {{ $slider->position_x+240 }}px; left: {{ $slider->position_y+380 }}px; white-space: nowrap;" data-ls="offsetxin:-50;
                                durationin:1200;
                                delayin:900;
                                easingin:easeOutExpo;
                                offsetxout:50;
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
                            {{ $slider->position_x+375 }}px
                            @else
                            {{ $slider->position_x+290 }}px
                            @endif; left: {{ $slider->position_y+380 }}px;
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
                            <div class="ls-slide" style="top:
                            @if( ! empty($slider->sub_title) )
                            {{ $slider->position_x+420 }}px
                            @elseif( empty($slider->content) && empty($slider->sub_title) )
                            {{ $slider->position_x+280 }}px
                            @else
                            {{ $slider->position_x+335 }}px
                            @endif;
                                    left: {{ $slider->position_y+380 }}px; white-space: nowrap;" data-ls="offsetxin:0;
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
                            skinsPath: '/themes/medical/vendor/layerslider/skins/'
                        });
                    }
                });
            </script>
        @endpush
    @endif
@endisset