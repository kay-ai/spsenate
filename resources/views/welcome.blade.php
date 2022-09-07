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

    </section>
@endsection

@push('js-bottom')

@endpush

