<div id="accredited" class="acredited">
    <div class="container">
        <div class="row">
            @if($contracted = Page::find(28))
                <div class="col-md-4">
                    <a href="{{ $contracted->url }}" class="first" :class="{ 'active' : id == {{ $contracted->id }} }" @click.prevent="showPage({{ $contracted->id }})">
                        <i class="rt-icon2-checkmark2" aria-hidden="true"></i>
                        {{ $contracted->title }}
                    </a>
                    <popover-page id="page_{{ $contracted->id }}" v-if="id == {{ $contracted->id }}" @close="id = ''">
                        <template slot="title">{{ $contracted->title }}</template>
                        {!! $contracted->body !!}
                    </popover-page>
                </div>
            @endif
            @if($contracted = Page::find(29))
                <div class="col-md-4">
                    <a href="{{ $contracted->url }}" class="second" :class="{ 'active' : id == {{ $contracted->id }} }" @click.prevent="showPage({{ $contracted->id }})">
                        <i class="rt-icon2-checkmark2" aria-hidden="true"></i>
                        {{ $contracted->title }}
                    </a>
                    <popover-page id="page_{{ $contracted->id }}" v-if="id == {{ $contracted->id }}" @close="id = ''">
                        <template slot="title">{{ $contracted->title }}</template>
                        {!! $contracted->body !!}
                    </popover-page>
                </div>
            @endif
            @if($contracted = Page::find(30))
                <div class="col-md-4">
                    <a href="{{ $contracted->url }}" class="third" :class="{ 'active' : id == {{ $contracted->id }} }" @click.prevent="showPage({{ $contracted->id }})">
                        <i class="rt-icon2-checkmark2" aria-hidden="true"></i>
                        {{ $contracted->title }}
                    </a>
                    <popover-page id="page_{{ $contracted->id }}" v-if="id == {{ $contracted->id }}" @close="id = ''">
                        <template slot="title">{{ $contracted->title }}</template>
                        {!! $contracted->body !!}
                    </popover-page>
                </div>
            @endif
        </div>
    </div>
</div>
@inject("menuService", "Modules\Menu\Services\MenuService")
<footer class="page_footer ds ms bg_image section_padding_30">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget widget_recent_entries">
                    <h3 class="widget-title"><i class="fa fa-stethoscope"></i> {{ $menuService->title('ivf') }}</h3>
                    {!! Menu::render('tup-bebek', \Modules\Theme\Presenters\Medical\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget_recent_entries">
                    <h3 class="widget-title"><i class="fa fa-stethoscope"></i> {{ $menuService->title('city') }}</h3>
                    {!! Menu::render('city', \Modules\Theme\Presenters\Medical\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget_text contact">
                    <h3 class="widget-title"><i class="fa fa-stethoscope"></i> {{ $menuService->title('clinic') }}</h3>
                    {!! Menu::render('clinic', \Modules\Theme\Presenters\Medical\FooterMenuLinksPresenter::class) !!}
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget_text contact">
                    @include('partials.footer.parts.contact')
                </div>
            </div>
        </div>
    </div>
</footer>