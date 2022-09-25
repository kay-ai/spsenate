@extends('layouts.app', [$pageTitle = 'SP | Welcome', $activePage = 'welcome'])

@section('content')

    <section class="hero-overlay section">
        <div class="new-nav d-flex justify-content-between">
            <div class="nav-names left shadow-sm">
                <p> HON. SHINA PELLER </p>
            </div>
            <div class="nav-names right shadow-sm">
                <p> FOR OYO NORTH </p>
            </div>
        </div>
        <div class="content-div">
            <p class="vote-text">VOTE</p>
            <div class="badges">
                <span class="words left one">An Entreprenuer</span>
                <span class="words right one">A Peace Maker</span>
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
            <img src="{{asset('img/sp-bg.png')}}">
        </div>
        <div class="hero-bottom shadow-sm">
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
                    <p class="quote">
                        "Bad officials are elected by good citizens who don't vote"
                    </p>
                    <p class="author">
                    <span>-</span> George Jean Nathan
                    </p>
                </div>
                <div class="col-md-6 flex-break">
                    <div class="o-card card shadow">
                        <p class="heading-1"><span>J</span>oin Us</p>
                        <img src="{{asset('img/accord-logo.png')}}" class="accord-logo" alt="accord-logo">
                        <form action="#" method="post">
                            <div class="join-form-row row p-lg-5 pt-0">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text"
                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text"
                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label small" for="customCheck1" style="padding-top: 4px;">
                                            Stay up to date with our campaign activities
                                        </label>
                                    </div>
                                    {{-- <p class="small mb-0" style="padding-top: 2px;">Stay up to date on our campaign activities</p> --}}
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
                <input type="submit" class="o-btn o-btn-primary-opp mt-4 ml-auto" role="button" value="Read Bio">
            </div>

        </div>
    </section>
    <section class="main-page sec3 section">
        <div class="section-header">
            <p class="text1">Projects</p>
            <p class="text2">Take a look, You'll like what you see</p>
        </div>
        <div class="gallery mt-3">
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
            <div class="gallery-item"></div>
        </div>
    </section>
@endsection

@push('js-bottom')

@endpush

