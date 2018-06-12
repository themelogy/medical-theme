<section id="photos" class="ls">
    <div id="photo-carousel" class="owl-carousel" data-margin="0" data-center="true" data-nav="true" data-loop="true" data-items="3">
        @foreach($posts as $post)
        <div class="gallery-item">
            <div class="gallery-image">
                <img src="{{ $post->present()->firstImage(406,270,'fit',80) }}" alt="{{ $post->title }}">
                <div class="gallery-image-links">
                </div>
            </div>
            <div class="gallery-item-description">
                <h3>{{ $post->title }}</h3>
            </div>
        </div>
        @endforeach
    </div>
</section>