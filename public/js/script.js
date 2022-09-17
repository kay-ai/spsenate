$(document).ready(function() {
    if ($('.section-container').scrollTop() > ($(window).height() - 80)) {
        $(".sp-fixed-item").fadeIn('slow');
    } else {
        $(".sp-fixed-item").fadeOut('slow');
    }
    $('.section-container').on("scroll", function(e) {
        if ($('.section-container').scrollTop() > ($(window).height() - 80)) {
            $(".sp-fixed-item").fadeIn('slow');

            function removeNav() {
                $(".sp-fixed-item").fadeOut('slow');
            }

            var myTimeOut;
            // var myTimeOut2;

            myTimeOut = setTimeout(removeNav, 4000);

            $(".sp-fixed-item").mouseleave( function () {
                myTimeOut = setTimeout(removeNav, 4000);
                console.log('mouse left');
            });

            $(".sp-fixed-item").mouseenter( function () {
                clearTimeout(myTimeOut);
                // clearTimeout(myTimeOut2);
                console.log('mouse entered');
            });

        } else {
            $(".sp-fixed-item").fadeOut('slow');
        }
    });
});
