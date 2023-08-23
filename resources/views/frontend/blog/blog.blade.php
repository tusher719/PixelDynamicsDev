@extends('frontend.main_master')
@section('title')
    Blog
@endsection
@section('blog')
active
@endsection
@section('content')

<div class="blog-page">
    <div class="container-fluid ">
        <div class="row blog-sec-bg">
            <div class="col-lg-10">
                <div class="blog-nav">
                    <span>Category:</span>
                    <ul>
                        <li>
                            <a href="#">Branding</a>
                        </li>
                        <li>
                            <a href="#">Game</a>
                        </li>
                        <li>
                            <a href="#">Esports</a>
                        </li>
                        <li>
                            <a href="#">Video</a>
                        </li>
                        <li>
                            <a href="#">VFX</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 p-0">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input class="search-bar" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 d-flex align-items-stretch">
                <a class="card" href="{{ route('blog.main') }}">
                    <img src="{{ asset('frontend') }}/assets/images/blog-1.jpg" class="img-fluid" alt="Card Image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Blog Title</h5>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae aut consectetur magni corporis inventore ad porro, aspernatur recusandae nulla iusto, assumenda dolorem quos consequuntur architecto rerum beatae, eveniet totam?</p>
                        <div class="card-btn mt-auto align-self-start">
                            <button class="btn-date">23 July 2023</button>
                            <span class="btn-cat">Game UI UX</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 d-flex align-items-stretch">
                <a class="card" href="{{ route('blog.main') }}">
                    <img src="{{ asset('frontend') }}/assets/images/blog-2.jpg" class="img-fluid" alt="Card Image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Blog Title</h5>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae aut consectetur magni corporis inventore ad porro, aspernatur recusandae nulla iusto,</p>
                        <div class="card-btn mt-auto align-self-start">
                            <button class="btn-date">23 July 2023</button>
                            <span class="btn-cat">Game UI UX</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 d-flex align-items-stretch">
                <a class="card" href="{{ route('blog.main') }}">
                    <img src="{{ asset('frontend') }}/assets/images/blog-3.jpg" class="img-fluid" alt="Card Image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Blog Title</h5>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae aut consectetur magni corporis inventore ad porro, aspernatur recusandae nulla iusto, assumenda dolorem quos consequuntur architecto rerum beatae, eveniet totam?</p>
                        <div class="card-btn mt-auto align-self-start">
                            <button class="btn-date">23 July 2023</button>
                            <span class="btn-cat">Game UI UX</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 d-flex align-items-stretch">
                <a class="card" href="{{ route('blog.main') }}">
                    <img src="{{ asset('frontend') }}/assets/images/blog-3.jpg" class="img-fluid" alt="Card Image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Blog Title</h5>
                        <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae aut consectetur magni corporis inventore ad porro, aspernatur recusandae nulla iusto, assumenda dolorem quos consequuntur architecto rerum beatae, eveniet totam?</p>
                        <div class="card-btn mt-auto align-self-start">
                            <button class="btn-date">23 July 2023</button>
                            <span class="btn-cat">Game UI UX</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
