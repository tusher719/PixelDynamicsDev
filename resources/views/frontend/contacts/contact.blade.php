@extends('frontend.main_master')
@section('title')
    Contact
@endsection
@section('classes')
active
@endsection
@section('content')

<div class="contact-page">
                    <div class="container">
                        <section class="contact-sec">
                            <div class="contact-main">
                                <h2>Contact US</h2>
                                <p>Contact us for Inquires and We are there for any help regarding design.</p>
                            </div>
                            <form action="">
                                <div class="mb-3">
                                    <input type="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <select class="form-control">
                                        <option selected>Serviece</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Message" rows="6"></textarea>
                                </div>
                                <button class="send-btn" type="submit">Send</button>
                            </form>
                        </section>


                    </div>
                    <section>
                            <div class="right-sec">
                                <div class="section-con">
                                    <div class="logo">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/Frame.png" alt="">
                                    </div>
                                    <div class="logo-txt">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/Group 59.png" alt="">
                                    </div>
                                    <div class="icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fb fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="linke fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="insta fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="tw fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="as fa-brands fa-artstation"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="be fa-brands fa-behance"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                </div>



@endsection
