@isset($pages)
    @if($pages->count()>0)
        <div class="col-sm-3">
            <div class="widget widget_categories">
                <ul>
                    @foreach($pages as $page)
                        <li>
                            <a href="{{ $page->url }}" title="{{ $page->title }}">{{ $page->title }}</a>
                        </li>
                        @unset($page)
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endisset