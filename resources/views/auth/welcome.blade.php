@extends('layouts.master')

@section('content')

<div class="main-header main-landing">

    <div class="content-bg-wrap bg-landing"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 m-auto col-md-12 col-sm-12 col-12">
                <div class="main-header-content">

                    <a href="#" class="logo">
                        <div class="img-wrap">
                            <img src="{{asset('assets/logo_blanc.png')}}" alt="Olympus">
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">unisoft</h6>
                            <div class="sub-title">SchoolManagement NETWORK</div>
                        </div>
                    </a>

                    <h1>The Most Complete Social Network!</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="landing-item">
                <div class="landing-item-thumb">
                    <img src="{{asset('assets/avatars/etd.png')}}" alt="page" style="width: 200px">
                    <div class="overlay overlay-dark"></div>
                    <a href="{{ route('admin.login') }}" class="btn btn-breez btn-sm">Je suis administrateur</a>
                    <a href="{{ route('admin.login') }}" class="full-block"></a>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="landing-item">
                <div class="landing-item-thumb">
                    <img src="{{asset('assets/avatars/prof.png')}}" alt="page" style="width: 200px ; padding-top: 25px; padding-left: 25px; padding-right: 25px; padding-bottom: 25px">
                    <div class="overlay overlay-dark"></div>
                    <a href="{{ route('enseignant.login') }}" class="btn btn-breez btn-sm">Je suis enseignant</a>
                    <a href="{{ route('enseignant.login') }}" class="full-block"></a>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="landing-item">
                <div class="landing-item-thumb">
                    <img src="{{asset('assets/avatars/etd1.png')}}" alt="page" style="width: 200px">
                    <div class="overlay overlay-dark"></div>
                    <a href="{{ route('etudiant.login') }}" class="btn btn-breez btn-sm">Je suis étudiant</a>
                    <a href="{{ route('etudiant.login') }}" class="full-block"></a>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="landing-item">
                <div class="landing-item-thumb">
                    <img src="{{asset('assets/avatars/user2.png')}}" alt="page"  style="width: 200px ;padding-top: 25px; padding-left: 25px; padding-right: 25px; padding-bottom: 25px">
                    <div class="overlay overlay-dark"></div>
                    <a  href="{{ route('anonymat.login') }}" class="btn btn-breez btn-sm">Je suis agent anonymat</a>
                    <a  href="{{ route('anonymat.login') }}" class="full-block"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
