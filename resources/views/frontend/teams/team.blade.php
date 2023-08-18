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

                        <div class="page-title white">
                            <h3 class="title">Meet our highly talented Team Members.</h3>
                        </div>

                        <div class="owl-carousel carousel-one owl-theme">
                            <div class="item">

                                <div class="container-fluid white">
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
                                            <div class="background-img" style="background-image: url({{ asset('frontend') }}/assets/images/background.png); background-repeat: no-repeat; background-position: center;">
                                                <div class="hello">
                                                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/image_7.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Carousel Item class -->
                            <div class="item">

                                <div class="container-fluid white">
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
                                            <div class="background-img" style="background-image: url({{ asset('frontend') }}/assets/images/background.png); background-repeat: no-repeat; background-position: center;">
                                                <div class="hello">
                                                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/image_7.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Carousel Item class -->

                        </div>
                        <!-- End Carousel -->
                        <div class="container-fluid secont-sec">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-titles">Combined Industry Experience</h2>
                                    <p class="card-txt">World renowned brands trusts us. We have a excellent combined industry experience that matters.</p>

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
                            <div class="row">
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-1.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-2.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-1.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-2.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-1.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-2.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-1.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-2.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-1.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div class="col-lg-3 col-md-4 mt-3">
                                    <div class="team-item mb-30">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/profile-2.jpg" alt="">
                                        <div class="team-item-overlay">
                                            <div class="content">
                                                <h2 class="title">Pixel Dynamics</h2>
                                                <p>Position <span>/</span> Role</p>
                                                <div class="line"></div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Worked with Industry tech Giants.</p>
                                                </div>
                                                <div class="work">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                    <p>Got Best Designer Award 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>



@endsection
