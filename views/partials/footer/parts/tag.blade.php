<h3 class="widget-title"><i class="fa fa-tags"></i> {{ trans('tag::tags.tags') }}</h3>

@foreach(app(\Modules\Tag\Repositories\TagRepository::class)->all()->take(15) as $recentTag)
    <a class="btn btn-default btn-small btn-custom theme" href="{{ $recentTag->url }}">{{ $recentTag->name }}</a>
@endforeach