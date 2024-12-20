<div class="top-spacer"></div>
<div class="spacer section">
    <div class="logo-carousel owl-carousel owl-theme">
        <div class="item">
            <img src="{{asset('img/logos/lgi-logo.png')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('img/logos/aquila_oil-logo.png')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('img/logos/aquila_BP-logo.png')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('img/logos/aquila_group-logo.png')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('img/logos/we2gedang-logo.png')}}" alt="">
        </div>
    </div>
</div>
<div class="footer section">
    <div class="row justify-content-center pt-5 mx-3">
        <div class="text-center">
            <p class="text1">SHINA PELLER</p>
            <div class="social-icons mt-5">
                <a href="https://web.facebook.com/honourableshinapeller" class="an-icon">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/ShinaPeller" class="an-icon">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/shinapeller" class="an-icon">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="https://www.youtube.com/c/lgileadgenerationinitiative" class="an-icon">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
            <div class="footer-links">
                <a href="/" class="link">Home</a>
                <a href="/bio" class="link">Bio</a>
                <a href="/donate" class="link">Donate</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="mb-0">Designed by: <b><a href="mailto:appnovetetechnologies@gmail.com">appnovetetechnologies@gmail.com</a></p>
    </div>
</div>

@push('js-bottom')
    <script>
        var owl = $('.logo-carousel');
        owl.owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1000:{
                    items:2
                },
                1200:{
                    items:3
                },
                1300:{
                    items:4
                }
            }
        })
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY>0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    </script>
@endpush
