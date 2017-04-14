let scrollTrigger = 1;
let navbar = $('#navbar');

$(window).on('scroll', function () {
    if (navbar.hasClass('always')) return;

    if (navbar.length > 0) {
        let scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
            navbar.addClass('bg-navbar');
            return;
        }
        navbar.removeClass('bg-navbar');
    }
});