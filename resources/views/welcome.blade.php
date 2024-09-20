@extends('layouts.master')
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        @foreach($sliders as $slider)
          <div class="single-hero-slide d-flex align-items-center justify-content-center">
              <!-- Slide Img -->
              <div class="slide-img bg-img" style="background-image: url(UploadedImages/{{$slider->image}});"></div>
              <!-- Slide Content -->
              <div class="hero-slides-content text-center">
                  <h2 data-animation="fadeInUp" data-delay="100ms">{{$slider->title}}<span>{{$slider->title}}</span></h2>
                  <p data-animation="fadeInUp" data-delay="300ms">{{$slider->subTitle}}</p>
              </div>
          </div>
          @endforeach
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>

    <!-- Slide Down -->
    <div class="slide-down" id="scrollDown">
        <h6>پایین آمدن</h6>
        <div class="line"></div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### About Us Area Start ##### -->
  @foreach($biographies as $bio)
<div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(UploadedImages/{{$bio->image}});" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>بیوگرافی هنرمند</h2>
                    <h6>{{$bio->motto}}</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="about-thumbnail mb-100">
                    <img src="UploadedImages/{{$bio->image}}" width="100%" alt="">
                </div>
            </div>
            <!-- About Content -->
            <div class="col-12 col-lg-6">
                <div class="about-content mb-100" style="text-align: right">
                    <h4>{{$bio->name}}</h4>
                    <p>{{$bio->biography}}</p>
                    <img src="img/core-img/signature.png" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- ##### About Us Area End ##### -->


<!-- ##### Music Player Area Start ##### -->
<div class="music-player-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="music-player-slides owl-carousel">

                    <!-- Single Music Player -->
                  @foreach($videos as $video)
                    <div class="single-music-player">
                      <div class="box bg-white user-5">
                       <iframe width="100%" height="200" src="{{$video->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="u-content">
                          <h6 style="direction: ltr; text-align: right">{{$video->title}}</h6>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Music Player Area End ##### -->

<!-- ***** Testimonials Area Start ***** -->
<section class="medica-testimonials-area section_padding_100 bg-img background-overlay" style="background-image: url(img/bg-img/hero2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading white-heading">
                    <!-- <img src="img/bg-img/testimonials2.jpg" alt=""> -->
                    <h2>دیدگاه ها</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-slider owl-carousel">
        <!-- Single Testimonials Slide -->
        @foreach($visions as $vision)
        <div class="single-testimonial-slide">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                      <div class="testimonial-given-author-info">
                          <img src="UploadedImages/{{$vision->image}}" alt="">
                      </div>
                        <h6 style="direction: rtl"> ” {{$vision->vision}} “ </h6>
                        <div class="testimonial-given-author-info">
                            <h6>{{$vision->name}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</section>
<!-- ***** Testimonials Area End ***** -->

<!-- ##### Featured Album Area Start ##### -->
<div class="featured-album-area section-padding-100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <center><h3 style="color: white">نوشته ها</h3></center>
                <div class="featured-album-content d-flex flex-wrap">
                  @foreach($posts as $post)
                    <!-- Album Thumbnail -->
                    <div class="album-thumbnail h-100 bg-img" style="background-image: url(UploadedImages/{{$post->image}});"></div>

                    <!-- Album Songs -->
                    <div class="album-songs h-100">
                        <div class="album-title" style="color: white; direction: right; text-align: right">
                            <h4 style="color: white">{{$post->title}}</h4>
                            <h6 style="color: white">{{$post->content}}</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Album Area End ##### -->


@endsection
