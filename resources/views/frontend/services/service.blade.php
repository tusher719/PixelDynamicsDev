@extends('frontend.main_master')
@section('title')
    Services
@endsection
@section('service')
active
@endsection
@section('content')

<div class="service-page">

    <div class="service-title">
        <h3 class="title">What we offer</h3>
    </div>
    <div class="container-fluid">

        <div class="row px-0">
            <div class="col-lg-6">
                <h1 class="heading">Transforming Visions into Masterpieces: Your Creative Partners.</h1>
            </div>
            <div class="col-lg-6 service-img">
                <img class="img-fluid mask-img" src="{{ asset('frontend') }}/assets/images/service.png" alt="">
            </div>
        </div>

        <div class="row service-box-con">
            @foreach ($offers as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">{{ $item->title }}</h5>                                            
                        </div>
                        <ul>
                            @if($item->offer == true)
                                <li>{{ $item->offer }}</li>
                            @endif
                            @if($item->offer2 == true)
                                <li>{{ $item->offer2 }}</li>
                            @endif
                            @if($item->offer3 == true)
                                <li>{{ $item->offer3 }}</li>
                            @endif
                            @if($item->offer4 == true)
                                <li>{{ $item->offer4 }}</li>
                            @endif
                            @if($item->offer5 == true)
                                <li>{{ $item->offer5 }}</li>
                            @endif
                            @if($item->offer6 == true)
                                <li>{{ $item->offer6 }}</li>
                            @endif
                            @if($item->offer7 == true)
                                <li>{{ $item->offer7 }}</li>
                            @endif
                            @if($item->offer8 == true)
                                <li>{{ $item->offer8 }}</li>
                            @endif
                            @if($item->offer9 == true)
                                <li>{{ $item->offer9 }}</li>
                            @endif
                            @if($item->offer10 == true)
                                <li>{{ $item->offer10 }}</li>
                            @endif
                            @if($item->offer11 == true)
                                <li>{{ $item->offer11 }}</li>
                            @endif
                            @if($item->offer12 == true)
                                <li>{{ $item->offer12 }}</li>
                            @endif
                            @if($item->offer13 == true)
                                <li>{{ $item->offer13 }}</li>
                            @endif
                            @if($item->offer14 == true)
                                <li>{{ $item->offer14 }}</li>
                            @endif
                            @if($item->offer15 == true)
                                <li>{{ $item->offer15 }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

    <section class="service-type">
        <div class="page-title mid-section white text-center">
            <h3 class="title">Let's Talk Numbers</h3>
        </div>
        <div class="container-fluid px-5">
            <div class="row service-con">
                <div class="col-lg-12 col-md-12">
                    <div class="call-con">
                        <div class="pay">
                            <h4 class="title">Pay by Project</h4>
                            <p class="desc">Pay the Precise Price for Your Work</p>
                        </div>
                        <div class="call">
                            <a href="#" class="call-btn">Book a Call</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row subscri-sec">
                <div class="col-lg-12 mb-4">
                    <h4 class="monthly-pay-title">Subscription Plans</h4>
                    <p class="monthly-pay-desc">Fixed Monthly Cost for All Your Tasks</p>
                </div>
                @foreach ($subscription as $item)
                <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body d-flex flex-column">
                            <div class="header">
                                <h5 class="title text-capitalize">{{ $item->title }}</h5>
                                <h6 class="price">{{ $item->amount }} usd</h6>
                            </div>
                            <p class="sub-title">Pay USD {{ $item->amount }} once,</p>
                            <p class="sub-title"> Get service full month.</p>
                            
                            <ul class="list-item">
                                @if($item->offer == true)
                                <li>{{ $item->offer }}</li>
                            @endif
                            @if($item->offer2 == true)
                                <li>{{ $item->offer2 }}</li>
                            @endif
                            @if($item->offer3 == true)
                                <li>{{ $item->offer3 }}</li>
                            @endif
                            @if($item->offer4 == true)
                                <li>{{ $item->offer4 }}</li>
                            @endif
                            @if($item->offer5 == true)
                                <li>{{ $item->offer5 }}</li>
                            @endif
                            @if($item->offer6 == true)
                                <li>{{ $item->offer6 }}</li>
                            @endif
                            @if($item->offer7 == true)
                                <li>{{ $item->offer7 }}</li>
                            @endif
                            @if($item->offer8 == true)
                                <li>{{ $item->offer8 }}</li>
                            @endif
                            @if($item->offer9 == true)
                                <li>{{ $item->offer9 }}</li>
                            @endif
                            @if($item->offer10 == true)
                                <li>{{ $item->offer10 }}</li>
                            @endif
                            @if($item->offer11 == true)
                                <li>{{ $item->offer11 }}</li>
                            @endif
                            @if($item->offer12 == true)
                                <li>{{ $item->offer12 }}</li>
                            @endif
                            @if($item->offer13 == true)
                                <li>{{ $item->offer13 }}</li>
                            @endif
                            @if($item->offer14 == true)
                                <li>{{ $item->offer14 }}</li>
                            @endif
                            @if($item->offer15 == true)
                                <li>{{ $item->offer15 }}</li>
                            @endif
                            </ul>
                            <a href="#" class="mt-auto align-self-start">Book a Call</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="row package-con">
                <div class="col-lg-12 col-md-12">
                    <div class="call-con">
                        <div class="pay">
                            <p class="desc">Doesn’t match with your demand?</p>
                            <h4 class="title">Create Your Own Package</h4>
                        </div>
                        <div class="call">
                            <a href="#" class="call-btn">Book a Call</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>

</div>



@endsection
