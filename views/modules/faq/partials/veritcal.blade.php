<div class="col-sm-12">
    <div class="row vertical-tabs">
        <div class="col-sm-5">

            <!-- Nav tabs -->
            <ul class="nav" role="tablist">
                @foreach($faqs as $faq)
                    <li @if($loop->first) class="active" @endif>
                        <a href="#vertical-tab{{ $loop->iteration }}" role="tab" data-toggle="tab">{{ $faq->title }}</a>
                    </li>
                @endforeach
            </ul>

        </div>

        <div class="col-sm-7">

            <!-- Tab panes -->
            <div class="tab-content no-border">
                @foreach($faqs as $faq)
                    <div class="tab-pane fade @if($loop->first)in active @endif" id="vertical-tab{{ $loop->iteration }}">
                        <h3 class="entry-title m-bot-10">{{ $faq->title }}</h3>
                        {!! $faq->content !!}
                    </div>
                @endforeach
            </div>

        </div>


    </div>
</div>