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

    $('.sp-fixed-item').addClass('sp-fixed-item-pinned');
    container.on("scroll", function(e) {

        if (container.scrollTop() > 100) {
            if (lastScrollY < container.scrollTop()){ //Scroll Down
                $('.sp-fixed-item').addClass('sp-fixed-item-unpinned');
                $('.sp-fixed-item').removeClass('sp-fixed-item-pinned');
            } else { //Scroll Up
                $('.sp-fixed-item').removeClass('sp-fixed-item-unpinned');
                $('.sp-fixed-item').addClass('sp-fixed-item-pinned');
            }
        }else{
            $('.sp-fixed-item').removeClass('sp-fixed-item-unpinned');
            $('.sp-fixed-item').addClass('sp-fixed-item-pinned');
        }

        lastScrollY = container.scrollTop();

        if ($('.spacer').isOnScreen()) {
                // The element is visible, do something
            $('.sp-bg-img').fadeOut();
        } else {
            // The element is NOT visible, do something else
            $('.sp-bg-img').fadeIn();
        }

        if ($('.spacer').isOnScreen()) {
            // The element is visible, do something
            $('.sp-bg-img2').addClass('d-none');
        } else {
            // The element is NOT visible, do something else
            $('.sp-bg-img2').removeClass('d-none');
        }
    });
});
