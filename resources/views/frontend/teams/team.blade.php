@extends('frontend.main_master')
@section('title')
    Team
@endsection
@section('team')
active
@endsection
@section('content')

<div class="main-sec">
    <section class="main-one">
        
        <div class="page-title">
            <h3 class="title">Meet our highly talented Team Members.</h3>
        </div>
        
        <div class="owl-carousel carousel-one owl-theme">
            @foreach ($teamcaro as $item)
            <div class="item">

                <div class="container-fluid">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-lg-7 col-md-12"> 
                            
                            <h2 class="member-name">{{ $item->name }}</h2>
                            <p class="sub-title">{{ $item->title }}</p>
                            
                            <div class="experience">
                                <div class="first-exp">
                                    <h4>{{ $item->industry }}</h4>
                                    <h2>{{ $item->industry_experience }} Years</h2>
                                </div>
                                <div class="second-exp">
                                    <h4>{{ $item->area }}</h4>
                                    <h2>{{ $item->area_experience }}</h2>
                                </div>
                            </div>

                            <div class="description">
                                <p class="desc1">{!! $item->description !!}</p>
                                <p class="desc2">{!! $item->description2 !!}</p>
                            </div>
                            
                        </div>
                        <div class="col-lg-5">
                            <div class="background-img" style="background-image: url({{ url('uploads/members/carousel/'.$item->member_img) }}); background-repeat: no-repeat; background-position: center;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Carousel Item class -->
            {{-- <div class="item">

                <div class="container-fluid">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-lg-7 col-md-12"> 
                            
                            <h2 class="member-name">Koushik Sarker</h2>
                            <p class="sub-title">A multi-award-winning designer, certified by Huawei and Adobe.</p>
                            
                            <div class="experience">
                                <div class="first-exp">
                                    <h4>Industry Experience</h4>
                                    <h2>7+ Years</h2>
                                </div>
                                <div class="second-exp">
                                    <h4>Area of Expertise</h4>
                                    <h2>Game UI UX , VFX</h2>
                                </div>
                            </div>

                            <div class="description">
                                <p class="desc1">With an impressive track record as the lead Game UI/UX Designer for the acclaimed Tactical FPS, Zero Hour, they also made significant contributions in VFX and Marketing designs within the gaming industry.</p>
                                <p class="desc2">Got Honor Master Designer award. And a Accredited Designer in Huawei Developer Allaiance.</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="background-img" style="background-image: url({{ asset('frontend') }}/assets/images/Layer_1.png); background-repeat: no-repeat; background-position: center;">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- End Carousel Item class -->

        </div>
        <!-- End Carousel -->                      
        <div class="line"></div>
        <div class="container-fluid secont-sec">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-titles">Combined Industry Experience</h2>
                    <p class="card-txt">A Preferred Choice for Leading Brands. Combined Expertise That Sets Industry Standards.</p>

                    <div class="slider" >
                        <div class="owl-carousel owl-theme" id="carousel-two">
                            <!-- Start Carousel Item class -->
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-1.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-2.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-3.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-4.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-5.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-6.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-7.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-8.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-9.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/brand/brand-10.png" alt="">
                            </div>
                            <!-- End Carousel Item class -->
                        </div>
                        <!-- End Carousel -->
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section main-team">
        <div class="container-fluid">
            <div class="row bottom-section">
                @foreach ($members as $item)
                <div class="col-lg-3 col-md-4">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset(url('uploads/members/Team/'.$item->member_img)) }}" alt="">
                        <div class="img-title">
                            <h3>{{ $item->name }}</h3>
                            <h5>{{ $item->position }}</h5>
                        </div>
                        <div class="team-item-overlay">
                            <div class="content">
                                <h2 class="title">{{ $item->name }}</h2>
                                <p>{{ $item->role }}</p>
                                <div class="line"></div>
                                @if ($item->job == true)
                                    <div class="work">
                                        <i class="fa-solid fa-square-full"></i>
                                        <p>{{ $item->job }}</p>
                                    </div>
                                @else
                                @endif
                                @if ($item->job2 == true)
                                    <div class="work">
                                        <i class="fa-solid fa-square-full"></i>
                                        <p>{{ $item->job2 }}</p>
                                    </div>
                                @else
                                @endif
                                @if ($item->job3 == true)
                                    <div class="work">
                                        <i class="fa-solid fa-square-full"></i>
                                        <p>{{ $item->job3 }}</p>
                                    </div>
                                @else
                                @endif
                                @if ($item->job4 == true)
                                    <div class="work">
                                        <i class="fa-solid fa-square-full"></i>
                                        <p>{{ $item->job4 }}</p>
                                    </div>
                                @else
                                @endif
                                @if ($item->job5 == true)
                                    <div class="work">
                                        <i class="fa-solid fa-square-full"></i>
                                        <p>{{ $item->job5 }}</p>
                                    </div>
                                @else
                                @endif
                                @if ($item->job6 == true)
                                    <div class="work">
                                        <i class="fa-solid fa-square-full"></i>
                                        <p>{{ $item->job6 }}</p>
                                    </div>
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
</div>



@endsection
