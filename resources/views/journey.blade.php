@extends('layouts.app', [$pageTitle = 'SP | Journey So Far', $activePage = 'journey'])

@section('content')
    <section class="main-page">
        <div class="mt-5 d-flex justify-content-center">
            {{-- <iframe src="{{asset('documents/the-journey-so-far.pdf')}}" width="100%" height="700px"></iframe> --}}
            <iframe allow-forms="" allow-modals="" allow-orientation-lock="" allow-pointer-lock="" allow-presentation="" allow-same-origin="" allow-scripts="" allow-top-navigation="" allow-top-navigation-by-user-activation="" src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url={{asset('documents/the-journey-so-far.pdf')}}#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="800" width="100%"></iframe>
        </div>
    </section>
@endsection
