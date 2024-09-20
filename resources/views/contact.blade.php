@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
    <div class="bradcumbContent">
        <h2>تماس باما</h2>
    </div>
</div>
<!-- bg gradients -->
<div class="bg-gradients"></div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area mt-30 section-padding-100-0" style="direction: rtl; text-align: right">
    <div class="container">
      @if($success = session('success'))
        <div class="single-service-area">
          <div class="course-title d-flex align-items-end">
              <center> <span style="font-size: 35px">{{$success}}</span></center>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <a href="#"><img src="img/core-img/logo3.png" alt=""></a>
                    <!-- Contact Social Info -->
                    <div class="contact-social-info mt-50">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-facebook" aria-hidden="true" style="color: blue; font-size: 30px"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-youtube" aria-hidden="true" style="color: red; font-size: 30px"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-instagram" aria-hidden="true"style="color: brown; font-size: 30px"></i></a>
                    </div>

                    <p class="mb-30">شما میتوانید با انتقادات، پشنهادات و نظرات نیک تان ما در جهت تولد اثر معیاری و باکیفیت کمک کنید. لطف نموده مارا از نظرات نیک تان آکاه سازید.</p>

                    <!-- Single Contact Info -->
                    <!-- <div class="single-contact-info d-flex align-items-center">
                        <div class="icon">
                            <img src="img/core-img/placeholder.png" alt="">
                        </div>
                        <h6>1481 Creekside Lane Avila Beach, CA 931</h6>
                    </div> -->

                    <!-- Single Contact Info -->
                    <!-- <div class="single-contact-info d-flex align-items-center">
                        <div class="icon">
                            <img src="img/core-img/message.png" alt="">
                        </div>
                        <h6>+53 345 7953 32453</h6>
                    </div> -->

                    <!-- Single Contact Info -->
                    <!-- <div class="single-contact-info d-flex align-items-center">
                        <div class="icon">
                            <img src="img/core-img/smartphone.png" alt="">
                        </div>
                        <h6>yourmail@gmail.com</h6>
                    </div> -->
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                      <!-- ُSuccess Flash Message -->
                      <form method="POST" action="{{route('sendMessage')}}" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="اسم کامل" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="ایمیل آدرس" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="موضوع" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" name="message" cols="30" rows="10" placeholder="پیام..." required></textarea>
                            </div>
                            <button class="btn musica-btn mt-30" type="submit">ارسال</button>
                            @include('layouts.errors')
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<!-- ##### Google Maps ##### -->
<!-- <div class="map-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div> -->

<!-- ##### CTA Area Start ##### -->
<div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/blog-img/3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex justify-content-between align-items-center" style="direction: rtl; text-align: right">
                    <div class="cta-text" >
                        <h4>همین اکنون پیام بگزارید</h4>
                        <h2>آیا سوالی دارید؟</h2>
                        <h6>شما میتوانید با انتقادات، پشنهادات و نظرات نیک تان ما در جهت تولد اثر معیاری و باکیفیت کمک کنید. لطف نموده مارا از نظرات نیک تان آکاه سازید.</h6>
                    </div>
                    <div class="cta-btn">
                        <a href="{{route('contactUs')}}" class="btn musica-btn">تماس باما</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->

@endsection
