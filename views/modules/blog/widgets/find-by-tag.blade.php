@isset($posts)
    @if($posts->count()>0)
    <div class="col-sm-12 m-top-20">
        <fieldset>
            <legend>{{ trans('themes::page.titles.related posts') }}</legend>
            <ul class="list-style">
                @foreach($posts as $post)
                    <li><a href="{{ $post->url }}">{{ $post->title }}</a></li>
                @endforeach
            </ul>
        </fieldset>
    </div>
    @endif
@endisset