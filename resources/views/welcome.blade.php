@extends('layouts.app', [$pageTitle = 'SP | Welcome', $activePage = 'Welcome'])

@section('content')
    <section class="hero">
        <div class="hero-overlay">
            <div class="new-nav d-flex justify-content-between">
                <div class="nav-names left shadow-sm">
                    <p> HON. SHINA PELLER </p>
                </div>
                <div class="nav-names right shadow-sm">
                    <p> FOR SENATE </p>
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
        </div>
    </section>
    <section class="main-page">
        <div class="volunteer">
            <div class="row justify-content-center p-5">
                <div class="col-md-6"></div>
                <div class="col-md-6 p-5">
                    <div class="card mt-5 shadow" style="background: #fff; height: 400px; border-radius: 10px;">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js-bottom')

@endpush

