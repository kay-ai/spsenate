@extends('layouts.app', [$pageTitle = 'SP | Journey So Far', $activePage = 'journey'])

@section('content')
    <section class="main-page">
        <div class="d-flex justify-content-center">
            <object data="{{asset('documents/the-journey-so-far.pdf')}}" type="application/pdf" frameborder="0" width="100%" style="height: 85vh;">
                <a href="{{asset('documents/the-journey-so-far.pdf')}}" class="btn px-3 join-us-btn shadow-sm m-2 float-right">Download</a>
                <embed src="https://drive.google.com/file/d/1KH7gRYe0Z2bQevOlkguAj9hLFGFUg6dw/preview?usp=share_link" width="100%" height="700px"/>
            </object>
            {{-- <iframe src="{{asset('documents/the-journey-so-far.pdf')}}" width="100%" height="700px"></iframe> --}}
            {{-- <iframe allow-forms="" allow-modals="" allow-orientation-lock="" allow-pointer-lock="" allow-presentation="" allow-same-origin="" allow-scripts="" allow-top-navigation="" allow-top-navigation-by-user-activation="" src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url={{asset('documents/the-journey-so-far.pdf')}}#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="800" width="100%"></iframe> --}}
        </div>
    </section>
@endsection
