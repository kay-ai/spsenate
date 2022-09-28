$(document).ready(function() {
    let container = $('.section-container');
    let lastScrollY = container.scrollTop();

    container.on("scroll", function(e) {

        if (container.scrollTop() > ($(window).height() + 100)) {
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
        if (container.scrollTop() > 500 && container.scrollTop() < ($(window).height() + 100)) {
            $('.sp-fixed-item').removeClass('sp-fixed-item-unpinned');
            $('.sp-fixed-item').addClass('sp-fixed-item-pinned');
        }
        lastScrollY = container.scrollTop();
    });
});
