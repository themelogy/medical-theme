@php
    $pages         = $page->children()->orderBy('position')->paginate(@$page->settings->list_per_page ?? 6);
    $grid_size     = @$page->settings->list_grid ?? 3;
    $chunk_size    = ceil(12/$grid_size);
    $column_size   = is_float(12/$grid_size) ? $grid_size : $grid_size;
    $column_div    = ceil(12 % $grid_size);
@endphp
@if($pages->count()>0)
<div class="container">
    @if(@$page->settings->show_content)
    <div class="row">
        <div class="col-md-12">
            {!! $page->body !!}
        </div>
    </div>
    @endif
    @foreach($pages->chunk($chunk_size) as $chunk)
    <div class="row">
        @foreach($chunk as $child)
            <div class="col-md-@if($loop->first){{ $column_size }}@elseif($loop->last && $column_div){{ $column_div }}@else{{ $column_size }}@endif">
                <div class="thumbnail">
                    <a href="{{ $child->url }}"><img class="img-thumbnail" src="{{ $child->present()->firstImage(400, 200, 'fit', 80) }}" alt="{{ $child->title }}" /></a>
                    <div class="caption">
                        <h3 class="m-bot-20"><a href="{{ $child->url }}">{{ $child->title }}</a></h3>
                        <p>{{ Str::words(strip_tags($child->body), 20) }}</p>
                    </div>
                </div>
            </div>
            @unset($child)
        @endforeach
    </div>
    @endforeach
    @pageTags($page, 5, 'page-tags')
    <div class="row">
        <div class="col-md-12">
            {!! $pages->links('partials.components.pagination') !!}
        </div>
    </div>
</div>
@endif