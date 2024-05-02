@extends('front.master')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner"
            style="background-image: url(images/img_bg_2.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-mt-15em">
                <div class="col-md-7 mt-text text-left animate-box" data-animate-effect="fadeInUp">
                    <h1>Our <strong>Services</strong></h1>
                </div>
            </div>
        </div>
    </header>
    <div class="overflow-hid">
        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Services</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="{{ route('service.single', $item->id) }}" class="gtco-card-item">
                                <figure>
                                    <div class="overlay"><i class="ti-plus"></i></div>
                                    <img src="{{asset('img/service/' . $item->img)}}" alt="Image"
                                         class="img-responsive">
                                </figure>
                                <div class="gtco-text">
                                    <h2>{{ $item->title }}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit($item->description) }}</p>
                                    <p><span class="btn btn-primary">Learn more</span></p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection



