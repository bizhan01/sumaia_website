@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
    <div class="bradcumbContent">
        <h2>دیدگاه ها</h2>
    </div>
</div>
<!-- bg gradients -->
<div class="bg-gradients"></div>
<!-- ##### Breadcumb Area End ##### -->


<!-- ***** Testimonials Area Start ***** -->
<section class="medica-testimonials-area section_padding_100 bg-img background-overlay" style="background-image: url(img/bg-img/hero2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading white-heading">
                    <!-- <img src="img/bg-img/testimonials2.jpg" alt=""> -->
                    <!-- <h2>Clients Testimonials</h2> -->
                </div>
            </div>
        </div>
    </div>

    <div class=" ">
        <!-- Single Testimonials Slide -->
        @foreach($visions as $vision)
        <div class="single-testimonial-slide">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                      <div class="testimonial-given-author-info">
                          <img src="UploadedImages/{{$vision->image}}" alt="">
                      </div>
                        <h6>“ {{$vision->vision}} ” <br> {{$vision->name}} </h6>
                        <!-- <div class="testimonial-given-author-info">
                            <h6>{{$vision->name}}</h6>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</section>
<!-- ***** Testimonials Area End ***** -->

@endsection
