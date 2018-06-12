<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @if($image = $page->present()->firstImage(400, null, 'resize', 80))
                <div class="thumbnail pull-right m-lft-20 m-bot-20">
                    <img class="img-thumbnail" src="{{ $image }}" alt="{{ $page->title }}"/>
                </div>
            @endif
            {!! $page->body !!}
            <hr/>
            <div class="tags">
                @pageTags($page, 5, 'page-tags')
            </div>
            @blogFindByTag($page->tags, 10)
        </div>
    </div>
</div>