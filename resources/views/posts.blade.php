@extends('layouts.master')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
    <div class="bradcumbContent">
        <h2>نوشته ها</h2>
    </div>
</div>
<!-- bg gradients -->
<div class="bg-gradients"></div>
<!-- ##### Breadcumb Area End ##### -->


<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-30 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="fitness-blog-posts" style="direction: rtl; text-align: right">

                    <!-- Single Post Start -->
                    @foreach($posts as $post)
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <a href="#" class="post-title">{{$post->title}}</a>
                        <div class="bg-gradients mb-30 w-100"></div>
                        <!-- Post Excerpt -->
                        <textarea name="name" rows="10" class="col-lg-12" style="border: 0px solid white">{{$post->content}}</textarea>
                          <center>
                            <div class="blog-post-thumb mb-30">
                                <img src="UploadedImages/{{$post->image}}" >
                            </div>
                        </center>
                    </div>
                    @endforeach

                    <!-- Pagination -->
                    <div class="musica-pagination-area wow fadeInUp" data-wow-delay="700ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->

@endsection
