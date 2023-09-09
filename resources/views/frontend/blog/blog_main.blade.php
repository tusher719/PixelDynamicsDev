@extends('frontend.main_master')
@section('title')
    Blog
@endsection
@section('content')

<div class="blog-page">
                    <div class="container-fluid">
                        <div class="row blog-sec-bg">
                            <div class="col-lg-9">
                                <div class="blog-nav">
                                    <span>Category:</span>
                                    <ul>
                                        @foreach ($blogcat as $item)
                                        <li>
                                            <a href="{{ url('category/blog/'.$item->id.'/'.$item->category_slug) }}">{{ $item->category_name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 p-0">
                                <div class="search-box">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <input class="search-bar" type="search" placeholder="Search" aria-label="Search">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="blog-title">
                                    <a href="{{ route('blog') }}">
                                        <i class="fa-solid fa-angle-left"></i>
                                        <h4>{{ $blog->blog_name }}</h4>
                                    </a>
                                </div>
                                <div class="blog-poster">
                                    <img class="img-fluid" src="{{ (!empty($blog->blog_img)) ? url('uploads/blog/'.$blog->blog_img) : url('uploads/no_image.jpg') }}" alt="{{ $blog->blog_name_slug }}">
                                    <span>
                                        {{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y')  }}
                                        by <a href="#">{{ $blog->user->name }}</a>
                                    </span>
                                </div>
                                <div class="blog-con">
                                    {!! $blog->blog_details !!}
                                </div>
                            </div>
                            <div class="col-md-3 p-0">
                                <div class="blog-auth">
                                    <div class="auth-info text-center">
                                        <img class="img-fluid" src="{{ asset('uploads/admin_images/'.$blog->user->photo) }}" alt="">
                                        <h5 class="name">{{ $blog->user->name }}</h5>
                                        <p class="designation">{{ $blog->user->phone }}</p>
                                    </div>
                                    <div class="auth-desc">
                                        {{ $blog->user->address }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
