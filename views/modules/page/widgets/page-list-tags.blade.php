@isset($tags)
    @if($tags->count()>0)
        <div class="row">
            <div class="col-md-12">
        @foreach($tags as $tag)
        <a class="button small thin" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('page.tag', [$tag->slug])) }}"><span class="label label-default">{{ $tag->name }}</span></a>
        @endforeach
            </div>
        </div>
    @endif
@endisset