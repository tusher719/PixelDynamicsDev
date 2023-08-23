@extends('frontend.main_master')
@section('title')
    Portfolio
@endsection
@section('portfolio')
active
@endsection
@section('content')



<div class="blog-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-title">
                    <a href="{{ route('portfolio') }}">
                        <i class="fa-solid fa-angle-left"></i>
                        <h4>{{ $post->portfolio_name }}</h4>
                    </a>
                </div>
                <div class="blog-poster">
                    <img class="img-fluid" src="{{ url('uploads/portfolios/'.$post->photo) }}" alt="">
                </div>
                <div class="blog-con">
                    {!! $post->portfolio_details !!}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
