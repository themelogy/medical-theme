<section id="about" class="ls section_padding_25 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('partials.parts.employee.employee')
            </div>
            <div class="col-md-4">
                @component('partials.parts.post.latest', ['posts'=>News::latest(10)])
                {{ trans('themes::news.title') }}
                @endcomponent
            </div>
            <div class="col-md-4">
                @component('partials.parts.post.latest', ['posts'=>Blog::latest(10)])
                {{ trans('themes::blog.titles.recent posts') }}
                @endcomponent
            </div>
        </div>
    </div>
</section>