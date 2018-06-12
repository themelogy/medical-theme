<div class="container">
    <div class="row">
        <div class="col-sm-9">

            @include('page::partials.image', ['page'=>$page])

            <div class="tags" style="display: block; clear:both;">
                <hr/>
                @pageTags($page, 5, 'page-tags')
            </div>
        </div>

        @parentMenu($page->parent)

        @blogFindByTag($page->tags, 10)

    </div>
</div>