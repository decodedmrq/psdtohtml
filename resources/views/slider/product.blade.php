<!-- Slider -->
<div class="slider slider-head">
    <!-- Background image -->
    <div class="slider-bg">
        <img class="slider-bg-image" src="{{ $slider->background }}" alt="">
        <div class="fog slider-fog"></div>
    </div>
    <!-- /Background image -->

    <div class="slider-body d-flex container py-5">
        @include('slider.left')
        @include('slider.right')
    </div>
</div>
<!-- /Slider -->
