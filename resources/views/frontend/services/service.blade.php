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
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">User Interface</h5>                                            
                        </div>
                        <ul>
                            <li>App UI</li>
                            <li>Website UI</li>
                            <li>AR/ VR UI</li>
                            <li>Interactive Prototype</li>
                            <li>UI Animation</li>
                            <li>Design System</li>
                            <li>Landing Page Video</li>
                            <li>Emoji Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">User Experience</h5>                                            
                        </div>
                        <ul>
                            <li>UX Strategy</li>
                            <li>Research</li>
                            <li>Information Architecture</li>
                            <li>Usability Testing</li>
                            <li>Performance Monitoring</li>
                            <li>User Flow</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">Game</h5>                                            
                        </div>
                        <ul>
                            <li>Game UI/UX ( HUD, Menu...)</li>
                            <li>FUI & UI Animation</li>
                            <li>UI Implementation</li>
                            <li>Promo Videos</li>
                            <li>Steam / Epic Store Page Design</li>
                            <li>Design System</li>
                            <li>Social Media Poster</li>
                            <li>E-sports Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">Branding</h5>                                            
                        </div>
                        <ul>
                            <li>Logo</li>
                            <li>Brand Strategy</li>
                            <li>Stationaries</li>
                            <li>Banners</li>
                            <li>Social Media Post</li>
                            <li>T-shirt, Jursey</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">Video Production</h5>                                            
                        </div>
                        <ul>
                            <li>App UI</li>
                            <li>Website UI</li>
                            <li>AR/ VR UI</li>
                            <li>Interactive Prototype</li>
                            <li>UI Animation</li>
                            <li>Design System</li>
                            <li>Landing Page Video</li>
                            <li>Emoji Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">3d & Game Design</h5>                                            
                        </div>
                        <ul>
                            <li>App UI</li>
                            <li>Website UI</li>
                            <li>AR/ VR UI</li>
                            <li>Interactive Prototype</li>
                            <li>UI Animation</li>
                            <li>Design System</li>
                            <li>Landing Page Video</li>
                            <li>Emoji Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="card-con w-100">
                    <div class="card-body d-flex flex-column">
                        <div class="service-card-heading">
                            <i class="fa-solid fa-square-full icon"></i>
                            <h5 class="title">Digital Marketing</h5>                                            
                        </div>
                        <ul>
                            <li>App UI</li>
                            <li>Website UI</li>
                            <li>AR/ VR UI</li>
                            <li>Interactive Prototype</li>
                            <li>UI Animation</li>
                            <li>Design System</li>
                            <li>Landing Page Video</li>
                            <li>Emoji Design</li>
                        </ul>
                    </div>
                </div>
            </div>
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
                <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body d-flex flex-column">
                            <div class="header">
                                <h5 class="title text-capitalize">Basic</h5>
                                <h6 class="price">495 usd</h6>
                            </div>
                            <p class="sub-title">Pay USD 495 once,</p>
                            <p class="sub-title"> Get service full month.</p>
                            
                            <ul class="list-item">
                                <li>1 Senior Designer & 1 Junior Designer</li>
                                <li>1 Request at a time Approx.</li>
                                <li>Delivery 48 hours</li>
                                <li>No Hidden Charge.</li>
                                <li>Branding, Web and App UI/UX, Digital marketing, and Social Media Posts are included.</li>
                                <li>No Hidden Charge.</li>
                            </ul>
                            <a href="#" class="mt-auto align-self-start">Book a Call</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body d-flex flex-column">
                            <div class="header">
                                <h5 class="title text-capitalize">standard</h5>
                                <h6 class="price">495 usd</h6>
                            </div>
                            <p class="sub-title">Pay USD 495 once,</p>
                            <p class="sub-title"> Get service full month.</p>
                            
                            <ul class="list-item">
                                <li>1 Senior Designer & 1 Junior Designer</li>
                                <li>1 Request at a time Approx.</li>
                                <li>Delivery 48 hours</li>
                                <li>No Hidden Charge.</li>
                                <li>Branding, Web and App UI/UX, Digital marketing, and Social Media Posts are included.</li>
                                <li>No Hidden Charge.</li>
                            </ul>
                            <a href="#" class="mt-auto align-self-start">Book a Call</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body d-flex flex-column">
                            <div class="header">
                                <h5 class="title text-capitalize">advanced</h5>
                                <h6 class="price">495 usd</h6>
                            </div>
                            <p class="sub-title">Pay USD 495 once,</p>
                            <p class="sub-title"> Get service full month.</p>
                            
                            <ul class="list-item">
                                <li>1 Senior Designer & 1 Junior Designer</li>
                                <li>1 Request at a time Approx.</li>
                                <li>Delivery 48 hours</li>
                                <li>No Hidden Charge.</li>
                            </ul>
                            <a href="#" class="mt-auto align-self-start">Book a Call</a>
                        </div>
                    </div>
                </div>
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
