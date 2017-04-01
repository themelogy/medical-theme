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
<footer class="page_footer ds ms bg_image section_padding_30">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget widget_recent_entries">
                    @include('partials.footer.parts.recent-posts')
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget_recent_entries">
                    @include('partials.footer.parts.databank')
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget_text contact">
                    <h3 class="widget-title"><i class="fa fa-stethoscope"></i> {{ app(\Modules\Menu\Repositories\MenuRepository::class)->findBySlug('clinic')->title }}</h3>
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

{!! Asset::add('assets/vendor/vue/vue.min.js') !!}
{!! Asset::add('assets/vendor/vue-resource/vue-resource.min.js') !!}

@push('js_inline')
<script>
    Vue.component('popover-page', {
        props: ['id'],
        template: `
            <transition name="fade">
                <div class="poppage col-md-12" v-show="$emit('showPage')">
                    <h3 class="title">
                        <slot name="title">Başlık</slot>
                        <button type="button" class="close" @click="$emit('close')"><span aria-hidden="true">×</span></button>
                    </h3>
                    <div class="content">
                        <slot></slot>
                    </div>
                </div>
            </transition>
        `
    });
    new Vue({
        data: {
            id: '',
            pageShow: false,
            isActive: false
        },
        el: '#accredited',
        methods: {
            showPage(id) {
                if(this.id == id) {
                    this.id = '';
                } else {
                    this.isActive = true;
                    this.id = id;
                }
            },
            boxClick(e) {
                if(!this.$el.contains(e.target)) {
                    this.id = '';
                }
            }
        },
        mounted() {
            document.addEventListener('click', this.boxClick, true);
        }
    });
</script>
@endpush

@push('css_inline')
<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }

    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */
    {
        opacity: 0
    }
</style>
@endpush