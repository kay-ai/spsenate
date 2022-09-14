$(document).ready(function() {
    $(document).on("scroll", function(e) {
        if ($(document).scrollTop() > ($(window).height() - 80)) {
            $(".sp-fixed-item").fadeIn('slow');
        } else {
            $(".sp-fixed-item").fadeOut('slow');
        }
    });
});
