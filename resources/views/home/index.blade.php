@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@section('content')
    @include('slider.product')
    <div class="container">
        @include('home.story.product')
        @include('home.feature.product')
        @include('home.feedback.product')
        @include('home.partner.product')
    </div>
@endsection

@push('script')
<script>
    $('.feedback-image-wrapper').on('click', function (event) {
        let index = $(this).attr('data-index');
        $('.feedback-image-wrapper').removeClass('active');
        $(this).addClass('active');
        $('.feedback-content').removeClass('active');
        $('#fb-content-' + index).addClass('active');
    });

    let bg = document.getElementById('bg-first-feature');
    makeBgFullWidth(bg);

    function makeBgFullWidth(element) {
        let bodyWidth = document.body.offsetWidth;
        let parent = element.parentElement;
        let pullWidth = "-" + (bodyWidth - parent.offsetWidth) / 2 + 'px';
        element.style.left = pullWidth;
        element.style.right = pullWidth;
    }

    var rm = $(".btn-story-read-more"),
        moreText = "Tìm hiểu thêm",
        lessText = "Đóng";
    rm.click(function () {
        var $this = $(this);
        $this.prev().slideToggle();
        $this.text($this.text().trim() === moreText ? lessText : moreText);
    });

</script>
@endpush
