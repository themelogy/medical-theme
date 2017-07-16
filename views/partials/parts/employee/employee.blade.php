<h2 class="widget-title">{{ trans('themes::employee.title') }}</h2>
<div class="owl-carousel" data-dots="true" data-loop="true" data-autoplay="4000" data-items="1" data-responsive-lg="1" data-responsive-md="1">
    @foreach(app(\Modules\Employee\Repositories\EmployeeRepository::class)->all() as $employee)
        <div class="item">
            <div class="thumbnail">
                <a href="{{ $employee->url }}">
                    <img src="{{ $employee->present()->firstImage(400,250,'fit',80) }}" alt="{{ $employee->fullname }}">
                </a>
                <div class="caption">
                    <h3>
                        <a href="{{ $employee->url }}">{{ $employee->fullname }}</a>
                    </h3>
                    <p>{{ $employee->position }}</p>
                    <p class="text-center social-icons">
                        <?php $socials = ['facebook', 'instagram', 'twitter', 'google', 'linkedin']; ?>
                        @foreach($socials as $social)
                            @if(@empty($employee->{$social}))
                                <a class="soc-{{ $social }}" href="{{ $employee->{$social} }}"
                                   title="{{ ucfirst($social) }}" data-toggle="tooltip">#</a>
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>