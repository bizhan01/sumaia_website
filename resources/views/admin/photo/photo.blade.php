<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 10:29:53 GMT -->
  @include('admin.css')
	<body class="fixed-sidebar fixed-header skin-default">
		<div class="wrapper">
			<!-- Preloader -->
			<div class="preloader"></div>
			@include('admin.aside')
			@include('admin.header')
			<div class="site-content">
				<!-- Content -->
  				<div class="content-area py-1">
  					<div class="container-fluid">
              <nav class="navbar navbar-light bg-white b-a mb-2">
                <!-- ُSuccess Flash Message -->
                  @if($success = session('success'))
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <div>{{$success}}</div>
                  </div>
                  @endif
								<center><h3>اضافه نمودن تصویر جدید در سایت</h3></center>
								<form method="POST" action="{{route('photo')}}" enctype="multipart/form-data">
				           {{ csrf_field() }}
                  <div class="form-group">
                    <input type="file"  name="image" id="input-file-now" class="dropify" />
                  </div>
                  <div class="form-group">
                    <center><button type="submit" class="btn btn-rounded btn-lg btn-success"><li class="fa fa-save"> اپلود نمودن تصویر</li></button></center>
                  </div>
                </form>
              </nav>
            </div>
          </div>


          <!-- Content -->
            <div class="content-area py-1">
              <div class="container-fluid">
                <div class="row mb-1">
                @foreach($photos as $photo)
                  <div class="col-md-3">
                    <div class="box bg-white product product-1">
                      <div class="p-img img-cover" style="background-image: url(/UploadedImages/{{$photo->image}});">
                        <div class="p-links">
                          <a href="/UploadedImages/{{$photo->image}}"><i class="fa fa-plus"></i></a>
                          <a  href = 'deletePhoto/{{ $photo->id }}' onclick='return confirm("حذف شود؟")'><i class="fa fa-remove" style="color: red"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>





        @include('admin.footer')
			</div>
		</div>
		@include('admin.js')
	</body>
<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 10:43:36 GMT -->
</html>
