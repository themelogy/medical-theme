@php
    $img = (object)[
        'width'    => $page->settings->image_width ?? 400,
        'height'   => $page->settings->image_height ?? null,
        'mode'     => @$page->settings->image_mode ? $page->settings->image_mode : 'resize',
        'quality'  => $page->settings->image_quality ?? 80,
        'position' => $page->settings->image_position ?? null,
        'show'     => $page->settings->show_image ?? null,
        'margin'   => 20
    ];
    $class = collect(['img-thumbnail']);
    switch ($img->position) {
        case 'top':
            $class->push('img-responsive m-bot-20');
            break;
        case 'bottom':
            $class->push('img-responsive m-top-20');
            break;
        case 'left':
            $class->push('pull-left m-rgt-20 m-bot-20');
            break;
        case 'right':
        $class->push('pull-right m-lft-20 m-bot-20');
        break;
        default:
        $class->push('m-b-20');
    }

    $image          = $page->present()->firstImage($img->width, $img->height, $img->mode, $img->quality);
    $html_image     = Html::image($image, $page->title, ['class'=>$class->implode(' ')]);
    $body           = in_array($img->position, ['','left','right','top']) ? $html_image.$page->body : $page->body.$html_image;
@endphp

@if($img->show && $image)
    {!! $body !!}
@else
    {!! $page->body !!}
@endif