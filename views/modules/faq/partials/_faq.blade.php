<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse{{ $loop->iteration }}" @if(!$loop->first)class="collapsed" @endif>
                {{ $faq->title }}
            </a>
        </h4>
    </div>
    <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse @if($loop->first)in @endif">
        <div class="panel-body">
            @if($faq->hasImage())
            <div class="thumbnail pull-right m-lft-20 m-bot-20">
                <img class="img-thumbnail" src="{{ $faq->present()->firstImage(250, 250, 'resize', 80) }}" alt="{{ $faq->title }}" />
            </div>
            @endif
            {!! $faq->content !!}
        </div>
    </div>
</div>