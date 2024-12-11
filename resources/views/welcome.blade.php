@extends('layouts.app', [$pageTitle = 'SP | Welcome', $activePage = 'welcome'])

@section('content')
@include('includes.lightbox')
@include('includes.messages')
    <section class="hero-section section">
        <img src="{{asset('img/hero-bg.png')}}" class="bg-img" alt="shina-peller">
        <div class="overlay">
            <nav class="navbar navbar-expand-md navbar-dark">
                <img class="navbar-brand-logo" src="{{asset('img/shinayo2023.png')}}">
                <button id="navbarCollapse" class="navbar-toggler d-lg-none active" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse nav-content" id="collapsibleNavId" style="justify-content: space-between">
                    <div style="width: 35px;"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/bio">Bio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#volunteer-anchor">Volunteer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/journey">Journey So Far</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ayedero.com/">Ayedero News</a>
                        </li>
                    </ul>

                    <div class="social-icons">
                        <a href="https://web.facebook.com/honourableshinapeller" class="an-icon">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/ShinaPeller" class="an-icon">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/shinapeller" class="an-icon">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="bottom-text">
                <p id="name" class="animate__animated animate__slideInUp animate__slow">Hon. Shina Abiola Peller</p>
                <div class="scroll-down animate__animated animate__slideInDown animate__slow">
                   <p>SCROLL DOWN</p>
                   <i class="fa fa-arrow-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="main-page sec2 section">
        <div class="o-card my-5">
            <div class=" quote">His actions speak louder</div>
            <blockquote class="">
                 His notable performance in delivering proper dividends of democracy and creating a proper channel of communication between him and his constituents has earned him multiple awards, such as the most Promising House of Representatives Member awarded to him by the Democracy Heroes Awards, the Peace Builder Award for Excellence in Community Development by Peace Achievers International Award, and many others.
            </blockquote>
            <div class="row o-btn-row">
                <a href="/bio" class="o-btn o-btn-primary-opp mt-4 ml-auto">Read Bio</a>
            </div>

        </div>
    </section>
    <section class="main-page sec3 section">
        <div class="join-us mt-lg-5 ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="bills">
                        <p class="quote">Bills & Motions</p>
                        <div class="bills-carousel owl-carousel owl-theme">
                            <div class="item shadow-sm">
                                <p class="bills-text">A motion on the need to tackle the scourge of rape and sexual offences in Nigeria. This has subsequently prompted the federal government to launch first ever National Sexual Offence Register in the country.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">A petition was raised on the dilapidated roads of Iseyin/Oyo and Okeho/Iganna road. This is being complemented by underground work, which will attract results soon.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">A bill seeking amendment to the Universal Basic Education Act 2004.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Motion on the need to reinvigorate the National Orientation Agency for impactful discharge of its mandate.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Motion on the urgent need to investigate the unrest in Iseyin caused by the killing of indigenes by men of the Nigeria Customs Service</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Motion on the urgent need to Revamp Ado-Awaye Suspended Lake.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Bank Employees etc (Declaration of Assets)(Amendment) Bill 2021.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Nigeria Security and Civil Defence Corps (Repeal and Transition) Bill 2022</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Motion on the need to resuscitate Ikere-Gorge Dam in Iseyin.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">A bill for an act to amend the National Orientation Agency Act.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="main-page sec4 section">
        <div class="section-header">
            <p class="text1">Projects</p>
            <p class="text2">Take a look, You'll like what you see</p>
        </div>
        <div class="gallery mt-3">
            <div class="gallery-item cursor" onclick="openModal();currentSlide(1)">
                <img src="{{asset('img/project-school (1).jpg')}}" alt="" >
                <div class="overlay">
                    <p>A block of 6 classroom at Muslim Grammar School, Iseyin Local Government, Iseyin.</p>
                </div>
            </div>
            <div class="gallery-item cursor" onclick="openModal();currentSlide(2)">
                <img src="{{asset('img/project-streetlight (1).jpg')}}" alt="" >
                <div class="overlay">
                    <p>Street Light at Kara Road, Koso Iseyin Local Government, Iseyin.</p>
                </div>
            </div>
            <div class="gallery-item cursor" onclick="openModal();currentSlide(3)">
                <img src="{{asset('img/project-borehole (1).jpg')}}" alt="" >
                <div class="overlay">
                    <p>1 of the 18 Boreholes built across the federal constituency after the election.</p>
                </div>
            </div>
            <div class="gallery-item cursor" onclick="openModal();currentSlide(4)">
                <img src="{{asset('img/project (13).jpg')}}" alt="" >
                <div class="overlay">
                    <p>Multifaceted Toilet, Otu, Itesiwaju local government</p>
                </div>
            </div>
            <div class="gallery-item cursor" onclick="openModal();currentSlide(5)">
                <img src="{{asset('img/project-aged widows (3).jpg')}}" alt="">
                <div class="overlay">
                    <p>Support for Aged and widows</p>
                </div>
            </div>
            <div class="gallery-item cursor" onclick="openModal();currentSlide(6)">
                <img src="{{asset('img/project-empowerment-of-100 (4).jpg')}}" alt="">
                <div class="overlay">
                    <p>First Ever Town Hall Feedback Meeting/Empowerment of Over 100 people</p>
                </div>
            </div>
            <div class="gallery-item cursor" onclick="openModal();currentSlide(7)">
                <img src="{{asset('img/project-farmers-empowerment (1).jpg')}}" alt="">
                <div class="overlay">
                    <p>Empowerment of over one thousand, five hundred farmers in his constituency</p>
                </div>
            </div>
            <div class="gallery-item cursor" onclick="openModal();currentSlide(8)">
                <img src="{{asset('img/project-health-intervention (1).jpg')}}" alt="">
                <div class="overlay">
                    <p>Donation of ambulances and other vital medical equipment to health centers.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js-bottom')
    <script>
        var owl = $('.bills-carousel');
        owl.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
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
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
        document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
@endpush


