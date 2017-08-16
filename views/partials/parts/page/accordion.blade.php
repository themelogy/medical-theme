@if(isset($menu))
    @php $menu = app(\Modules\Menu\Repositories\MenuRepository::class)->findBySlug($menu) @endphp
    @if(isset($menu))
        @if(@$heading=='h1')
            <h1 class="widget-title">{{ $menu->title }}</h1>
        @else
            <h2 class="widget-title">{{ $menu->title }}</h2>
        @endif
        <div class="panel-group" id="accordion{{ $menu->id }}">
            @foreach(app(\Modules\Menu\Repositories\MenuItemRepository::class)->rootsForMenu($menu->id) as $menuItem)
                @if($page = Page::find($menuItem->page_id))
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion{{ $menu->id }}" href="#collapse{{ $page->id }}" @if(!$loop->first)class="collapsed" @endif>
                                    {{ $page->title }}
                                </a>
                            </h3>
                        </div>
                        <div id="collapse{{ $page->id }}" class="panel-collapse collapse @if($loop->first)in @endif">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{ $page->url }}">
                                            <img src="{{ $page->present()->firstImage(80,80,'fit',80) }}" alt="{{ $page->title }}">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        {!! \Str::words(strip_tags($page->body), 15) !!}<br/>
                                        <a href="{{ $page->url }}">{{ trans('global.buttons.read more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endif