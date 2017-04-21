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
    //  Story button read more
    var btnReadMoreStory = $(".btn-story-read-more");
    var hiddenStory = $('#hidden-story');
    var moreText = '{{ trans('string.story.read_more') }}';
    var lessText = '{{ trans('string.minimize') }}';

    btnReadMoreStory.on('click', function (e) {
        $(this).text($(this).text().trim() === moreText ? lessText : moreText);
        hiddenStory.slideToggle();
    });

    //  Feedback Image
    $('.feedback-image-wrapper').on('click', function (event) {
        var index = $(this).attr('data-index');
        $('.feedback-image-wrapper').removeClass('active');
        $(this).addClass('active');
        $('.feedback-content').removeClass('active');
        $('#fb-content-' + index).addClass('active');
    });

    //  Feature background
    var featureBg = $('#bg-feature');
    var featureBgHeight = featureBg.outerHeight();
    var featureItems = $('.feature');
    var featureBgIsChanging = false;
    var featureBgPreloadHeight = 300;
    var animateSpeed = 150;

    makeBgFullWidth(featureBg);
    $(window).on('scroll', function () {
        var windowOffsetTop = $(this).scrollTop();
        featureItems.each(function (index, item) {
            var currentTop = $(item).offset().top;
            var preloadCurrentTop = currentTop - featureBgPreloadHeight;

            if (index === featureItems.length - 1) {
                if (preloadCurrentTop < windowOffsetTop) makeFeatureBgAnimate($(item));

                return;
            }

            if (preloadCurrentTop < windowOffsetTop && windowOffsetTop < currentTop) {
                makeFeatureBgAnimate($(item));
            }
        });
    });

    function makeFeatureBgAnimate(currentItem) {
        var top = currentItem.position().top;
        if (featureBgIsChanging || top === featureBg.position().top) return;

        featureBgIsChanging = true;
        var bottom = -(currentItem.position().top - featureBgHeight + currentItem.outerHeight());
        featureBg.animate({
            'top': top,
            'bottom': bottom
        }, animateSpeed, function () {
            featureBgIsChanging = false;
        });
    }

    function makeBgFullWidth(element) {
        var bodyWidth = $('body').outerWidth();
        var parentWidth = element.parent().outerWidth();
        var pullWidth = "-" + (bodyWidth - parentWidth) / 2 + 'px';
        element.css('left', pullWidth);
        element.css('right', pullWidth);
    }
</script>
@endpush
