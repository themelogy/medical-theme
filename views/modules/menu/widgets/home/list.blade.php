@if(isset($menu))
    @if(@$attributes['heading']=='h1')
        <h1 class="widget-title" style="font-size:18px;">{{ $menu->title }}</h1>
    @else
        <h2 class="widget-title" style="font-size:18px;">{{ $menu->title }}</h2>
    @endif
    <ul class="list1 darklinks">
        @foreach($menuItems as $menuItem)
            <li><a href="{{ LaravelLocalization::getLocalizedURL(locale(), url($menuItem->uri)) }}">{{ $menuItem->title }}</a></li>
        @endforeach
    </ul>
@endif