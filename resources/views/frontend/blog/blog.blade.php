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
                        @foreach ($blogcat as $item)
                        <li>
                            <a href="#">{{ $item->category_name }}</a>
                        </li>
                        @endforeach
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

            @foreach ($blog as $item)
                <div class="col-lg-4 col-md-6 mt-4 d-flex align-items-stretch">
                    <a class="card" href="{{ route('blog.main',$item->id) }}">
                        <img src="{{ (!empty($item->blog_img)) ? url('uploads/blog/'.$item->blog_img) : url('uploads/no_image.jpg') }}" class="img-fluid" alt="{{ $item->blog_name_slug }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item->blog_name }}</h5>
                            <p class="card-text mb-4"> {{ $item->short_details }} </p>
                            <div class="card-btn mt-auto align-self-start">
                                <button class="btn-date">
                                    {{ Carbon\Carbon::parse($item->created_at)->format('d M Y')  }}
                                </button>
                                <span class="btn-cat">{{ $item->category->category_name }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>



@endsection
