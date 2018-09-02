<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="padding-right: 0;">
            <div id="map" style="height: 300px;"></div>
        </div>
    </div>
</div>
@push('js_inline')
    <script>
        function initMap() {
            var coordinate = {lat: {{ setting('contact::contact-map-lat') }}, lng: {{ setting('contact::contact-map-lng') }} };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: coordinate
            });
            var infoWindow = new google.maps.InfoWindow({
                content: '<h5>{{ setting('theme::company-name') }}</h5><p>{!! wordwrap(setting('theme::address'), 30, '<br/>') !!}<br/><a class="btn btn-default btn-xs" target="_blank" href="https://www.google.com/maps/dir/Current+Location/{{ setting('contact::contact-map-lat') }},{{ setting('contact::contact-map-lng') }}">Yol Tarifi Al</a></p>'
            });
            var marker = new google.maps.Marker({
                position: coordinate,
                map: map,
                icon: "{{ Theme::url('images/marker.png') }}",
                zIndex: 9999999
            });
            marker.addListener('click', function () {
               infoWindow.open(map, marker);
            });
        }
    </script>
    <script src="//maps.googleapis.com/maps/api/js?key={{ setting('contact::contact-map-key') }}&callback=initMap"></script>
@endpush