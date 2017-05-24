@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@section('content')
    @include('home.banner.product')
    <div class="container">
        @include('home.intro.product')
        @include('home.feature.product')
        @include('home.benefit.product')
    </div>
@endsection

@push('script')
<script>
    //  Toggle Info content
    let btnTglContent = $('.btn-tgl-content');
    btnTglContent.on('click', function () {
        let contentId = $(this).attr('data-toggle');
        let content = $(`#${contentId}`);

        console.log(content,content.css('display'));
        if (content.css('display') === "none") {
            content.slideDown();
            btnTglContent.html("{{ trans('string.minimize') }}");
        } else {
            content.slideUp();
            btnTglContent.html("{{ trans('string.view_more') }}");
        }
    });

    //  Slider
    let slideItems = $('.slide-item');
    let slideLength = slideItems.length;

    //  generate navigator
    let navigator = $('#slider-navigator');
    for (let i = 0; i < slideLength; i++) {
        navigator.append(`<div class="pointer" data-index="${i}">
            <span class="content">${i + 1}</span>
        </div>`);
    }

    let pointers = $('.navigator .pointer');
    pointers.on('click', function () {
        let index = $(this).attr('data-index');
        clickSlide($(slideItems[index]));
    });

    //  animate slider
    slideItems.on('click', function () {
        clickSlide($(this));
    });

    function clickSlide(slide) {
        let index = $(slideItems).index(slide);
        let leftIndex = index - 1;
        let rightIndex = index + 1;

        leftIndex = leftIndex >= 0 ? leftIndex : slideLength + leftIndex;
        rightIndex = rightIndex < slideLength ? rightIndex : rightIndex - slideLength;

        slideItems.removeClass('active left right');
        $(slideItems[leftIndex]).addClass('left');
        $(slideItems[rightIndex]).addClass('right');
        slide.addClass('active');

        pointers.removeClass('active');
        $(pointers[index]).addClass('active');
    }

    //  Run
    clickSlide($(slideItems[0]));
</script>
@endpush
