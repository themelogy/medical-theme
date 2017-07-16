<section id="about" class="ls section_padding_25 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="widget-title">{{ trans('themes::theme.title.services') }}</h1>
                <div class="panel-group" id="accordion">
                    @php $page = Page::find(2); @endphp
                    @if(isset($page))
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
                                                <a href="{{ $service->url }}">
                                                    <img src="{{ $service->present()->firstImage(80,80,'fit',80) }}" alt="{{ $page->title }}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                {!! \Str::words(\Patchwork\Utf8::toAscii($service->body), 15) !!}<br/>
                                                <a href="{{ $service->url }}">{{ trans('global.buttons.read more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                @component('partials.parts.post.latest', ['posts'=>News::latest(10)])
                {{ trans('themes::news.title') }}
                @endcomponent
            </div>
            <div class="col-md-4">
                @component('partials.parts.post.latest', ['posts'=>Blog::latest(10)])
                    {{ trans('themes::blog.title') }}
                @endcomponent
            </div>
        </div>
    </div>
</section>