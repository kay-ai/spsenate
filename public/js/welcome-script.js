$.fn.isOnScreen = function(){

    var win = $(window);

    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

};


$(document).ready(function() {
    let container = $('.section-container');
    let lastScrollY = container.scrollTop();

    container.on("scroll", function(e) {

        if (container.scrollTop() > ($(window).height())) {
            if (lastScrollY < container.scrollTop()){ //Scroll Down
                $('.sp-fixed-item').addClass('sp-fixed-item-unpinned');
                $('.sp-fixed-item').removeClass('sp-fixed-item-pinned');
            } else { //Scroll Up
                $('.sp-fixed-item').removeClass('sp-fixed-item-unpinned');
                $('.sp-fixed-item').addClass('sp-fixed-item-pinned');
            }
        }else{
            $('.sp-fixed-item').addClass('sp-fixed-item-unpinned');
            $('.sp-fixed-item').removeClass('sp-fixed-item-pinned');
        }
        if (container.scrollTop() > 500 && container.scrollTop() < ($(window).height())) {
            $('.sp-fixed-item').removeClass('sp-fixed-item-unpinned');
                $('.sp-fixed-item').addClass('sp-fixed-item-pinned');
        }
        lastScrollY = container.scrollTop();

        if ($('.sec1').isOnScreen()) {
            $('.sec1 .o-card').addClass('animate__animated animate__delay-1s animate__slow animate__fadeInRight');
            $('.sec1 .fadeLeft').addClass('animate__animated animate__delay-1s animate__slow animate__fadeInLeft');
            $('.sec1 .fadeUp').addClass('animate__animated animate__delay-1s animate__slow animate__fadeInUp');
        } else {
            $('.sec1 .o-card').removeClass('animate__animated animate__delay-1s animate__slow animate__fadeInRight');
            $('.sec1 .fadeLeft').removeClass('animate__animated animate__delay-1s animate__slow animate__fadeInLeft');
            $('.sec1 .fadeUp').removeClass('animate__animated animate__delay-1s animate__slow animate__fadeInUp');
        }

        if ($('.sec2').isOnScreen()) {
            $('.sec2 .o-card').addClass('animate__animated animate__delay-1s animate__slow animate__fadeInLeft');
        } else {
            $('.sec2 .o-card').removeClass('animate__animated animate__delay-1s animate__slow animate__fadeInLeft');
        }
    });
});
