@if(isset($menu))
    @if(@$attributes['heading']=='h1')
        <h1 class="widget-title" style="font-size:18px;">{{ $menu->title }}</h1>
    @else
        <h2 class="widget-title" style="font-size:18px;">{{ $menu->title }}</h2>
    @endif
    <div class="panel-group" id="accordion{{ $menu->id }}">

        <ul class="nav nav-tabs">
            @foreach($menuItems as $menuItem)
                <li class="panel-title">
                    <a href="#tab{{ $menuItem->id }}" role="tab" data-toggle="tab">
                        {{ $menuItem->title }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach($menuItems as $menuItem)
            <div class="tab-pane fade @if($loop->first)in active @endif" id="tab{{ $menuItem->id }}">
                <p class="featured-tab-image">
                    <a href="{{ $menuItem->page->url }}">
                        <img src="{{ $menuItem->page->present()->firstImage(347,231,'fit',80) }}" alt="{{ $menuItem->page->title }}">
                    </a>
                </p>
                {!! \Str::words(strip_tags($menuItem->page->body), 15) !!}<br/>
                <a href="{{ $menuItem->page->url }}">{{ trans('global.buttons.read more') }}</a>
            </div>
            @endforeach
        </div>

    </div>
@endif