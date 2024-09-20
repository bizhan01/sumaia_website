@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <h2>آهنگ ها</h2>
    </div>
</div>
<!-- bg gradients -->
<div class="bg-gradients"></div>
<!-- ##### Breadcumb Area End ##### -->

<!-- Content -->
<div class="content-area py-1" style="direction: rtl; margin-top: 50px">
  <div class="container-fluid">
    <div class="row mb-1">
      @foreach($videos as $video)
      <div class="col-md-4">
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



<!-- ##### CTA Area Start ##### -->
<div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/bg-img/bg-4.jpg);">
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
