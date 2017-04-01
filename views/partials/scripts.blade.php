<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Open Sans:200,300,400,500,600,700:latin-ext',
                'Oswald:200,300,400,500,600,700:latin-ext',
                'Montserrat:200,300,400,500,600,700:latin-ext'
            ]
        }
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

{!! Asset::css() !!}
@stack('css_inline')

{!! Theme::script('js/compressed.js') !!}
{!! Theme::script('js/main.js') !!}

{!! Asset::js() !!}
@stack('scripts')
@stack('js_inline')

<script type="text/javascript">
    var LHCChatOptions = {};
    LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
        var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
        po.src = '//livechat.visualturk.com/index.php/'+'{{ locale() == 'tr' ? 'tur' : 'eng' }}'+'/chat/getstatus/(click)/internal/(position)/middle_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
