@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>تصاویر</h2>
    </div>
</div>
<!-- bg gradients -->
<div class="bg-gradients"></div>
<!-- ##### Breadcumb Area End ##### -->


<main class="main-content" style="margin-top: 20px; direction: rtl">
  <div class="container-fluid photos">
    <div class="row align-items-stretch">
      @foreach($photos as $photo)
      <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up">
        <a href="UploadedImages/{{$photo->image}}" class="d-block photo-item" data-fancybox="gallery">
          <img src="UploadedImages/{{$photo->image}}" alt="Image" class="img-fluid">
          <div class="photo-text-more">
            <span class="icon icon-search"></span>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</main>


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
