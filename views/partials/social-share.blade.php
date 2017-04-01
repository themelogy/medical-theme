<div class="mobile-social-share">
    <div class="pull-left">
        <h3>{{ trans('themes::theme.buttons.share') }}</h3>
    </div>
    <div id="socialHolder" class="pull-right">
        <div id="socialShare" class="btn-group share-group">
            <a data-toggle="dropdown" class="btn btn-info">
                <i class="fa fa-share-alt fa-inverse"></i>
            </a>
            <button href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle share">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a data-original-title="Twitter" rel="tooltip" target="_blank" href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}" class="btn btn-twitter" data-placement="left">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a data-original-title="Facebook" rel="tooltip" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" class="btn btn-facebook" data-placement="left">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a data-original-title="Google+" rel="tooltip" target="_blank" href="https://plus.google.com/share?url={{ urlencode($url) }}" class="btn btn-google" data-placement="left">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a data-original-title="LinkedIn" rel="tooltip" target="_blank" href="https://pinterest.com/pin/create/button/?https://pinterest.com/pin/create/button/?{{ urlencode($url) }}" class="btn btn-linkedin" data-placement="left">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a data-original-title="Pinterest" rel="tooltip" target="_blank" class="btn btn-pinterest" data-placement="left">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
                <li>
                    <a data-original-title="Email" rel="tooltip" target="_blank" href="mailto:{{ Html::email(setting('theme::email')) }}" class="btn btn-mail" data-placement="left">
                        <i class="fa fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

@push('js_inline')
<script>
    (function ($) {
        var popupSize = {
            width: 780,
            height: 550
        };
        $('.mobile-social-share a').on('click', function (e) {
            var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

            var popup = window.open($(this).prop('href'), 'social',
                    'width=' + popupSize.width + ',height=' + popupSize.height +
                    ',left=' + verticalPos + ',top=' + horisontalPos +
                    ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
                popup.focus();
                e.preventDefault();
            }
        });
    })(jQuery);
</script>
@endpush