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
{!! Theme::script('js/main.min.js') !!}

{!! Asset::add(mix('assets/css/app.css')->toHtml()) !!}
{!! Asset::add(mix('assets/js/manifest.js')->toHtml()) !!}
{!! Asset::add(mix('assets/js/vendor.js')->toHtml()) !!}
{!! Asset::add(mix('assets/js/app.js')->toHtml()) !!}

{!! Asset::js() !!}
@stack('scripts')
@stack('js_inline')

@include('partials.analytics')

<script type="text/javascript">
@php
switch(locale()) {
	case 'tr':
	$locale = 'tur';
	break;
	case 'ru':
	$locale = 'rus';
	break;
	default:
	$locale = 'eng';
}
@endphp
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//destek.cihangircakiciklinik.com/index.php/tur/chat/getstatus/(click)/internal/(position)/middle_right/(ma)/br/(dot)/true/(top)/350/(units)/pixels/(leaveamessage)/true/(noresponse)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '109172473138068'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=109172473138068&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
