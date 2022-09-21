@extends('layouts.app', [$pageTitle = 'SP | Welcome', $activePage = 'Welcome'])

@section('content')
    <div class="section-container clean-scrollbar">
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
        <section class="main-page section">
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
            <div class="o-card p-5 my-5">
                <div class="p-5"></div>
                <div class="p-5 quote">Why Vote For Us</div>
                <div class="p-5"></div>
            </div>
        </section>
    </div>
@endsection

@push('js-bottom')

@endpush

