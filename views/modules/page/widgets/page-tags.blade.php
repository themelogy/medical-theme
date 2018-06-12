@isset($tags)
    @if($tags->count()>0)
        @foreach($tags as $tag)
        <a class="button small thin" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('page.tag', [$tag->slug])) }}"><span class="label label-default">{{ $tag->name }}</span></a>
        @endforeach
    @endif
@endisset