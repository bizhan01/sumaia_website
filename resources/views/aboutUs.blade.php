@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
  <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb.jpg);">
      <div class="bradcumbContent">
          <h2>درباره</h2>
      </div>
  </div>
  <!-- bg gradients -->
  <div class="bg-gradients"></div>
  <!-- ##### Breadcumb Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  @foreach($biographies as $bio)
  <div class="about-us-area section-padding-100-0">
      <div class="container">
          <div class="row">
              <!-- About Thumbnail -->
              <div class="col-12 col-lg-6">
                  <div class="about-thumbnail mb-100">
                      <img src="UploadedImages/{{$bio->image}}" width="100%" alt="">
                  </div>
              </div>
              <!-- About Content -->
              <div class="col-12 col-lg-6">
                  <div class="about--content mb-100" style="direction: rtl; text-align: right">
                      <h4>{{$bio->name}}</h4>
                      <p>{{$bio->biography}}</p>
                      @endforeach
                      <!-- Key Notes -->
                      <ul class="key-notes">
                        <h6>فعالیت های عمده</h6>
                        @foreach($activities as $activity)
                          <li><div class="check"><img src="img/core-img/check.png" alt=""></div> {{$activity->activity}} </li>
                        @endforeach
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ##### About Us Area End ##### -->

  <!-- ##### Career Timeline Area Start ##### -->
  <div class="career-timeline-area section-padding-100">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-heading">
                      <h2>خاطرات</h2>
                      <h6>هر روز زندگی میتواند خاطره ی باشد، اگر زنده زندگی کنید</h6>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-12" style="direction: rtl; text-align: right">

                  <!-- Single Timeline Area -->
                  @foreach($diaries as $diary)
                  <div class="single-timeline-area d-flex" >
                      <!-- Timeline Date -->
                      <div class="timeline-date">
                          <h2>{{$diary->day}} <span>{{$diary->month}} {{$diary->year}}</span></h2>
                      </div>
                      <!-- Timeline Content -->
                      <div class="timeline-content" >
                          <h5>{{$diary->title}}</h5>
                          <p>{{$diary->content}}</p>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>

          <div class="row">
              <div class="col-12">
                  <div class="timeline-btn text-center mt-100">
                      <a href="#" class="btn musica-btn">بیشتر</a>
                  </div>
              </div>
          </div>

      </div>

      <!-- Side Thumbs -->
      <div class="first-img">
          <img src="img/bg-img/man.png" alt="">
      </div>
      <div class="second-img">
          <img src="img/bg-img/microphone.png" alt="">
      </div>
  </div>
  <!-- ##### Career Timeline Area End ##### -->

  <!-- ##### Discography Area Start ##### -->
  <div class="discography-area section-padding-100">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-heading dark">
                      <h2>تصاویر</h2>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-12">
                  <!-- Discography Slides -->
                  <div class="discography-slides owl-carousel">
                      <!-- Single Discography -->
                      @foreach($photos as $photo)
                      <div class="single-discography">
                          <a href="#"><img src="UploadedImages/{{$photo->image}}" style="height: 150px"></a>
                      </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ##### Discography Area End ##### -->

  <!-- ##### CTA Area Start ##### -->
  <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/bg-img/bg-8.jpg);">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="cta-content" style="direction: rtl; text-align: right">
                      <div class="cta-text">
                          <span>Sumaia Karimi</span>
                          <h2>میخواهیم از شما بشنویم!</h2>
                          <h4>لطف نموده مارا از انتقادات، پشنهادات و نظرات نیک تان آگاه سازید تا بتوانیم در تولید اثرات بعدی از آن استفاده ببریم.</h4>
                      </div>
                      <div class="cta-btn mt-30">
                          <a href="{{route('contactUs')}}" class="btn musica-btn">تماس باما</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ##### CTA Area End ##### -->
@endsection
