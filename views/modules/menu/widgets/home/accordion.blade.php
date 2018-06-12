@if(isset($menu))
    @if(@$attributes['heading']=='h1')
        <h1 class="widget-title" style="font-size:18px;">{{ $menu->title }}</h1>
    @else
        <h2 class="widget-title" style="font-size:18px;">{{ $menu->title }}</h2>
    @endif
    <div class="panel-group" id="accordion{{ $menu->id }}">
        @foreach($menuItems as $menuItem)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion{{ $menu->id }}" href="#collapse{{ $menuItem->id }}" @if(!$loop->first)class="collapsed" @endif>
                                {{ $menuItem->title }}
                            </a>
                        </h3>
                    </div>
                    <div id="collapse{{ $menuItem->id }}" class="panel-collapse collapse @if($loop->first)in @endif">
                        <div class="panel-body">
                            <div class="media">
                                {{--<div class="media-left">--}}
                                    {{--<a href="{{ $menuItem->page->url }}">--}}
                                        {{--<img src="{{ $menuItem->page->present()->firstImage(80,80,'fit',80) }}" alt="{{ $menuItem->page->title }}">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                <div class="media-body">
                                    {!! \Str::words(strip_tags($menuItem->page->body), 15) !!}<br/>
                                    <a href="{{ $menuItem->page->url }}">{{ trans('global.buttons.read more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endif