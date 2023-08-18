@extends('frontend.main_master')
@section('title')
    Index
@endsection
@section('content')

    <div class="main-page">
        <div class="video-con">
            <video class="main-video" src="{{ asset('frontend') }}/assets/images/video.mp4" type="video/mp4" autoplay loop muted></video>
        </div>
    </div>
@endsection
