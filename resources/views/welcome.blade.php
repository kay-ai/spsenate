@extends('layouts.app', [$pageTitle = 'SP | Welcome', $activePage = 'welcome'])

@section('content')
@include('includes.lightbox')

    <section class="hero-overlay section">
        <div class="new-nav d-flex justify-content-between">
            <a href="/bio" class="nav-names left shadow-sm animate__animated animate__fadeInLeft animate__slow">
                <p> HON. SHINA PELLER </p>
            </a>
            <a href="/bio" class="nav-names right shadow-sm animate__animated animate__fadeInRight animate__slow">
                <p> FOR OYO NORTH </p>
            </a>
        </div>
        <div class="content-div">
            <p class="vote-text animate__animated animate__fadeInDown">VOTE</p>
            <div class="badges">
                <span class="words left one">An Entreprenuer</span>
                <span class="words right one">A Peace Maker</span>
                <span class="words right six">Voice of the Common Man</span>
                <span class="words left two">Organizer Peller Unity Cup</span>
                <span class="words right two">A Businessman</span>
                <span class="words left three">The Ayedero of Yoruba Land</span>
                <span class="words right three">The Akinrogun of Epe Land</span>
                <span class="words left four">The Mayegun of Igbobi-Sabe</span>
                <span class="words right four">Aare Gbobaniyi of Iseyin</span>
                <span class="words left five">A Philanthropist</span>
                <span class="words right five">Founder AQUILA GROUP</span>
                <span class="words left six">A Leader</span>
            </div>
            <img class="animate__animated animate__slideInUp animate__slow" src="{{asset('img/sp-bg.png')}}">
        </div>
        <div class="hero-bottom shadow-sm animate__animated animate__slideInUp">
            <p>FOR SENATE</p>
            <div class="bottom-line">
                <p>THE PEOPLE'S CHOICE</p>
            </div>
        </div>
    </section>
    <section class="main-page sec1 section">
        <div class="join-us mt-lg-5 ">
            <div class="row justify-content-center">
                <div class="col-md-6 flex-break">
                    <p class="quote mb-0 fadeLeft">
                        "Bad officials are elected by good citizens who don't vote"
                    </p>
                    <p class="author mb-1 fadeLeft">
                        <span>-</span> George Jean Nathan
                    </p>
                    <div class="ballot-print d-flex fadeUp">
                        <img class="accord-party-logo" src="{{asset('img/Accord-party.jpg')}}">
                        <img class="fingerprint" src="{{asset('img/Fingerprint.png')}}">
                        <div class="election-text mt-2">
                            <p>2023</p>
                            <p>SENETORIAL</p>
                            <p>ELECTION</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 flex-break">
                    <div class="o-card card shadow">
                        <p class="heading-1" id="volunteer-anchor"><span>J</span>oin Us</p>
                        <img src="{{asset('img/accord-logo.png')}}" class="accord-logo" alt="accord-logo">
                        <form action="#" method="post">
                            <div class="join-form-row row p-lg-5 pt-0">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="">Email*</label>
                                    <input type="text"
                                        class="form-control" name="email" id="" aria-describedby="helpId" placeholder="johndoe@email.com" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="">Full Name*</label>
                                    <input type="text"
                                        class="form-control" name="full_name" id="" aria-describedby="helpId" placeholder="John Doe" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Areas of Interest*</label>
                                        <select name="specialty" class="form-control" required>
                                            <option value="participant">Regular Participant</option>
                                            <option value="mobilization">Mobilization</option>
                                            <option value="media">Communications/Media</option>
                                            <option value="finance">Finance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="follow_campaign" name="follow_campaign" value="1">
                                        <label class="custom-control-label small" for="follow_campaign" style="padding-top: 4px;">
                                            Stay up to date with our campaign activities
                                        </label>
                                    </div>
                                    <input type="submit" class="o-btn o-btn-primary-opp mt-3 float-right" role="button" value="I'm ready!">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="main-page sec2 section">
        <div class="o-card my-5">
            <div class=" quote">His actions speak louder</div>
            <blockquote class="">
                He is currently a member of the House of Representatives, representing Iseyin, Itesiwaju, Kajola and Iwajowa federal constituency of Oyo State. His notable performance in delivering proper dividends of democracy and creating a proper channel of communication between him and his constituents has earned him multiple awards, such as the most Promising House of Representatives Member awarded to him by the Democracy Heroes Awards, the Peace Builder Award for Excellence in Community Development by Peace Achievers International Award, and many others.
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
                        <p class="quote">Bills Passed</p>
                        <div class="owl-carousel owl-theme">
                            <div class="item shadow-sm">
                                <p class="bills-text">A motion on the need to tackle the scourge of rape and sexual offences in Nigeria. This has subsequently prompted the federal government to launch first ever National Sexual Offence Register in the country.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">A petition was raised on the dilapidated roads of Iseyin/Oyo and Okeho/Iganna road. This is being complemented by underground work, which will attract results soon.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">A bill seeking amendment to the Universal Basic Education Act 2004. It has passed through first reading.</p>
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
                                <p class="bills-text">Bank Employees etc (Declaration of Assets)(Amendment) Bill 2021. Passed through second reading.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Nigeria Security and Civil Defence Corps (Repeal and Transition) Bill 2022</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">Motion on the need to resuscitate Ikere-Gorge Dam in Iseyin.</p>
                            </div>
                            <div class="item shadow-sm">
                                <p class="bills-text">A bill for an act to amend the National Orientation Agency Act, it has also passed through first reading.</p>
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
        var owl = $('.owl-carousel');
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


