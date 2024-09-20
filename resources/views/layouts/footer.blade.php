<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0" >
    <div class="container-fluid">
        <div class="row">

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-100">
                    <a href="#"><img src="img/core-img/logo22.png"  alt="" style="height: 80px"></a>
                    <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">GlideSoft</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2" style="text-align: right">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>صفحات</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="/">خانه</a></li>
                            <li><a href="{{route('photos')}}">تصاویر</a></li>
                            <li><a href="{{route('videos')}}">ویدیو ها</a></li>
                            <li><a href="{{route('visions')}}">دیدگاه</a></li>
                            <li><a href="{{route('posts')}}">نوشته ها</a></li>
                            <li><a href="{{route('aboutUs')}}">درباره</a></li>
                            <li><a href="{{route('contactUs')}}">تماس باما</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2" style="text-align: right">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>فعالیت ها</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="#">بنیاد خیره دهکده</a></li>
                            <li><a href="#">شبکه هنرمندان افغان</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2" style="text-align: right">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>صفحات اجتماعی</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="#">فسبوک</a></li>
                            <li><a href="#">یوتیوب</a></li>
                            <li><a href="#">انستاگرام</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-xl-3" style="text-align: right">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>سبسکرایپ</h4>
                    </div>
                    <!-- ُSuccess Flash Message -->
                      @if($emailSuccess = session('emailSuccess'))
                      <div class="" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          <div>{{$emailSuccess}}</div>
                      </div>
                      @endif

                      <form method="POST" action="{{route('emailSubscribe')}}" class="subscribe-form">
      				           {{ csrf_field() }}
                        <input type="email" name="email" id="subscribeemail">
                        <button type="submit">سبسکرایپ</button>
                        @include('layouts.errors')
                    </form>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->
