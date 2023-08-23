<aside id="aside" role="complementary" class="js-fullheight">
    <h1 id="logo">
        <a href="{{ url('/') }}" class="logo-con">
            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/logo-2.gif" alt=""/>
            <div class="logoTxt">
                <p class="txt1">PixelDynamics</p> <br>
                <p class="txt2">.studio</p>
            </div>
        </a>
        <p class="camption">A studio powered by industry leading professionals.</p>
    </h1>
    <nav id="main-menu" role="navigation">
        <ul>
            <li class="@yield('portfolio')">
                <a href="{{ route('portfolio') }}">
                    <i class="fa-solid fa-grip-lines"></i>
                    Portfolio
                </a>
            </li>
            <li class="@yield('service')">
                <a href="{{ route('services') }}">
                    <i class="fa-solid fa-box"></i>
                    Services
                </a>
            </li>
            <li class="@yield('team')">
                <a href="{{ route('team') }}">
                    <i class="fa-solid fa-shapes"></i>
                    Team
                </a>
            </li>
            <li class="@yield('blog')">
                <a href="{{ route('blog') }}">
                    <i class="fa-solid fa-newspaper"></i>
                    Blog
                </a>
            </li>
        </ul>
    </nav>
    <div class="sidebar-footer">
        <div class="social-main">
            <a href="{{ route('contact') }}" class="heading">
                <i class="fa-solid fa-envelope"></i>
                Contact Us
            </a>
            <div class="icons">
                <ul>
                    <li class="facebook">
                        <a href="#">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="insta">
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="linke">
                        <a href="#">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
