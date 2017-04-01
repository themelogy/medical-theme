<h3 class="widget-title"><i class="fa fa-map-marker"></i> {{ trans('themes::contact.contact us') }}</h3>
<p style="color: #fff;">{!! setting('theme::address') !!}</p>
<div class="border-paragraphs">
    <p class="info">
        <i class="highlight3 rt-icon2-phone-outline"></i>
        <span>{!! setting('theme::phone') !!}<br/>
        {!! setting('theme::phone2') !!}<br/>
        {!! setting('theme::mobile') !!}
        </span>
    </p>
    <p>
        <i class="highlight3 rt-icon2-printer2"></i>
        {!! setting('theme::fax') !!}
    </p>
    <p>
        <i class="highlight3 rt-icon2-mail2"></i>
        <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
    </p>
</div>