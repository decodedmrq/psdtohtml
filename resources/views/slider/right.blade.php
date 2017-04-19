<!-- Slider right -->
<div class="slider-right col-sm-5 offset-1">
    <div class="h-100 d-flex align-items-center">
        <div>
            <div class="row">
                <div class="title col-sm-12 mb-3">
                    {{ $slider->title }}
                </div>
                <div class="description col-sm-12">
                    {{ $slider->description }}
                </div>
            </div>

            <!-- Download buttons -->
            <div class="row">
                <div class="col-sm-5">
                    <a href="{{ $about->gg->link }}">
                        <img class="btn-store-download" src="{{ $about->gg->button }}"
                             alt="{{ trans('string.google_play') }}">
                    </a>
                </div>

                <div class="col-sm-5">
                    <a href="{{ $about->apple->link }}">
                        <img class="btn-store-download" src="{{ $about->apple->button }}"
                             alt="{{ trans('string.app_store') }}">
                    </a>
                </div>
            </div>
            <!-- /Download buttons -->
        </div>
    </div>
</div>
<!-- /Slider right -->
