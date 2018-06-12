<section id="about" class="ls section_padding_25 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('partials.parts.employee.employee')
            </div>
            <div class="col-md-4">
                @newsLatestPosts(10, 'home-owl')
            </div>
            <div class="col-md-4">
                @blogLatestPosts(10, 'home-owl')
            </div>
        </div>
    </div>
</section>