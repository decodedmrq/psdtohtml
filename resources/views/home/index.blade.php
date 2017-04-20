@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@section('content')
    {{--@include('slider.product')--}}
    @include('banner.product')
    <div class="container">
        <div class="row">
            @include('home.story.product')
        </div>
        <hr>
        <div class="row">
            @include('home.feature.product')
        </div>
        {{--<hr>--}}
        {{--@include('home.feedback.product')--}}
        {{--@include('home.partner.product')--}}
    </div>
@endsection

@push('script')
<script>
    $('.feedback-image-wrapper').on('click', function (event) {
        var index = $(this).attr('data-index');
        $('.feedback-image-wrapper').removeClass('active');
        $(this).addClass('active');
        $('.feedback-content').removeClass('active');
        $('#fb-content-' + index).addClass('active');
    });

    var bg = document.getElementById('bg-first-feature');
    makeBgFullWidth(bg);

    function makeBgFullWidth(element) {
        var bodyWidth = document.body.offsetWidth;
        var parent = element.parentElement;
        var pullWidth = "-" + (bodyWidth - parent.offsetWidth) / 2 + 'px';
        element.style.left = pullWidth;
        element.style.right = pullWidth;
    }

    var btnReadMoreStory = $(".btn-story-read-more");
    var hiddenStory = $('#hidden-story');
    var moreText = '{{ trans('string.story.read_more') }}';
    var lessText = '{{ trans('string.minimize') }}';

    btnReadMoreStory.on('click', function (e) {
//        $(this).prev().slideToggle();
        $(this).text($(this).text().trim() === moreText ? lessText : moreText);
        hiddenStory.slideToggle();
    });
</script>
@endpush
