@extends('front.master')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner"
            style="background-image: url({{ asset('images/img_bg_4.jpg') }})" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-mt-15em">
                <div class="col-md-7 mt-text text-left animate-box" data-animate-effect="fadeInUp">
                    <h1>Our <strong>Services</strong></h1>
                    <h2>Far far away, behind the word mountains, far from the countries Vokalia.</h2>
                </div>
            </div>
        </div>
    </header>
    <div class="flex-section gtco-gray-bg">
        <div class="col-1">
            <div class="text">
                <div class="row row-pb-sm">
                    <div class="col-md-12">
                        <h2>{{ $service->title }}</h2>

                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2 flex-img"
             style="background-image: url({{ asset('images/img_1.jpg') }});"></div>
    </div>
@endsection



