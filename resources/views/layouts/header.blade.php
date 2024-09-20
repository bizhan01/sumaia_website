<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="musica-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="musicaNav">

                    <!-- Nav brand -->
                    <a href="/home" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" style="direction: rtl">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav" style="direction: rtl">
                            <ul>
                                <li><a href="/">خانه</a></li>
                                <li><a href="#"> گالری </a>
                                    <ul class="dropdown" style="text-align: right">
                                        <li><a href="{{route('photos')}}">تصاویر</a></li>
                                        <li><a href="{{route('videos')}}">آهنگ ها</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"> فعالیت ها </a>
                                    <ul class="dropdown" style="text-align: right">
                                        <li><a href="#">بنیاد خیره دهکده</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('visions')}}">دیدگاه ها</a></li>
                                <li><a href="{{route('posts')}}">نوشته ها</a></li>
                                <li><a href="{{route('aboutUs')}}">درباره</a></li>
                                <li><a href="{{route('contactUs')}}">تماس باما</a></li>
                            </ul>

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
