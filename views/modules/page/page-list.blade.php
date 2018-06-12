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
        @foreach($chunk as $page)
            <div class="col-md-@if($loop->first){{ $column_size }}@elseif($loop->last && $column_div){{ $column_div }}@else{{ $column_size }}@endif">
                <div class="thumbnail">
                    <img class="img-thumbnail" src="{{ $page->present()->firstImage(400, 200, 'fit', 80) }}" alt="{{ $page->title }}" />
                    <div class="caption">
                        <h3 class="m-bot-20">{{ $page->title }}</h3>
                        <p>{{ Str::words(strip_tags($page->body), 20) }}</p>
                        <a href="{{ $page->url }}" class="btn btn-default btn-xs" role="button">{{ trans('global.buttons.read more') }}</a>
                    </div>
                </div>
            </div>
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