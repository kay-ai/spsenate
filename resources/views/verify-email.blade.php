@extends('layouts.app', [$pageTitle = 'SP | Verify Email', $activePage = 'verify-email'])

@section('content')
    <div class="main-page verify-email sec1">
        <div class="row justify-content-center o-card-row">
            <div class="col-lg-7">
                <div class="o-card card shadow">
                    <p class="heading-1" id="volunteer-anchor"><span>V</span>erify Email</p>
                    <form action="{{route('email.verify')}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="join-form-row justify-content-center row p-lg-5 pt-0">
                            <p>Please confirm that the email below is your email address</p>
                            <div class="col-md-12">
                                <div class="email-box">{{$token->email}}</div>
                            </div>

                            <div class="col-md-12 mt-3 text-center">
                                <input type="hidden" name="token" value="{{$token->token}}">
                                <input type="submit" class="o-btn o-btn-primary-opp mt-3 showLoading" role="button" value="Confirm!">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
