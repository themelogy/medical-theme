<section id="breadcrumbs" class="breadcrumbs_section cs section_padding_25 gradient table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="thin">{{ $title }}</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                {!! Breadcrumbs::renderIfExists($breadcrumbs) !!}
            </div>
        </div>
    </div>
</section>