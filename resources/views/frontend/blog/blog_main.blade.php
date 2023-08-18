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
                                    <a href="blog.html">
                                        <i class="fa-solid fa-angle-left"></i>
                                        <h4>Blog Tilte</h4>
                                    </a>
                                </div>
                                <div class="blog-poster">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/blog-1.jpg" alt="">
                                    <span>Jun 23, 2023 by <a href="">Koushik Sarker</a></span>
                                </div>
                                <div class="blog-con">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fuga id doloremque ad amet molestiae
                                ipsa distinctio fugiat odit ut minus similique aliquid reiciendis eligendi enim consequuntur, rem hic.
                                Dolore quam quaerat non ad adipisci. Nesciunt, aliquid neque est in hic eligendi aperiam sequi alias eum
                                tempora cupiditate deserunt libero tempore cum rem animi sit necessitatibus assumenda laborum, ratione
                                nemo quis eveniet! Iusto similique minima ab maiores quam suscipit, libero rem repellendus molestias quis
                                voluptatum minus accusamus exercitationem doloremque aut eum consectetur deserunt recusandae? Adipisci itaque,
                                sit quas ducimus neque, unde ipsa mollitia voluptatum quia natus rem perspiciatis placeat maxime qui explicabo
                                excepturi cupiditate dolorem totam ipsam ad laudantium modi doloribus quo in? Numquam asperiores quam dolore
                                nostrum natus. Sequi, quod voluptates odio est pariatur possimus deleniti nobis? Ipsa in esse cupiditate dolorum
                                perspiciatis molestias repellat nobis quo laboriosam velit rem nam temporibus ullam accusantium, molestiae,
                                consequatur quos inventore voluptatibus earum necessitatibus minus ratione blanditiis? Vitae possimus iusto,
                                ipsa voluptatum similique odio rerum doloremque recusandae beatae. Perferendis saepe soluta vero molestiae!
                                Aperiam dolorum nostrum totam beatae necessitatibus, eum quaerat reiciendis itaque deserunt unde adipisci ea
                                debitis delectus corporis officiis dolores. Ad sequi minima in porro rem dignissimos distinctio quos perspiciatis.
                                </div>
                            </div>
                            <div class="col-md-3 p-0">
                                <div class="blog-auth">
                                    <div class="auth-info text-center">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/image_7.png" alt="">
                                        <h5 class="name">Koushik Sarker</h5>
                                        <p class="designation">Brand Designer</p>
                                    </div>
                                    <div class="auth-desc">
                                        Jacob Cass is a brand designer & strategist, educator, podcaster, business coach and the founder of JUST Creative,
                                        an award-winning branding & design consultancy that doubles as an industry-leading blog. Get in touch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
