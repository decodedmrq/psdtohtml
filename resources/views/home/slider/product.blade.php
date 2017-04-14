<!-- Slider -->
<div class="slider slider-head">
    <!-- Background image -->
    <div class="slider-bg">
        <img class="slider-bg-image" src="{{ $slider->background }}" alt="">
        <div class="fog slider-fog"></div>
    </div>
    <!-- /Background image -->

    <div class="slider-body d-flex container">
        @include('home.slider.left')
        @include('home.slider.right')
    </div>
</div>
<!-- /Slider -->
