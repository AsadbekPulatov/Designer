@extends('front.master')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner"
            style="background-image: url(images/img_bg_4.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-mt-15em">
                <div class="col-md-7 mt-text text-left animate-box" data-animate-effect="fadeInUp">
                    <h1>Our <strong>Portfolio</strong></h1>
                    <h2>Far far away, behind the word mountains, far from the countries Vokalia.</h2>
                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section gtco-gray-bg">
        <div class="gtco-container">
            <div class="row">
                @foreach($projects as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ $item->url }}" class="gtco-card-item" target="_blank">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="{{asset('img/project/' . $item->img)}}" alt="Image" class="img-responsive">
                            </figure>
                            <div class="gtco-text">
                                <h2>{{ $item->name }}</h2>
                                <p>{{ $item->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection


