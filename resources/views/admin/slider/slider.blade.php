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
								<center><h3>سلایدر / نمایه</h3></center>
                <form method="POST" action="{{route('addSlider')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row form-group">
                      <div class="col-md-6">
                        <label  style="color: black">عنوان اصلی</label>
                        <input type="text" name="title" value=""  class="form-control"  placeholder="عنوان اصلی" required>
                      </div>
                      <div class="col-md-6">
                        <label  style="color: black">عنوان فرعی</label>
                        <input type="text" name="subTitle" value=""  class="form-control"  placeholder="عنوان فرعی" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label  style="color: black">تصویر</label>
                        <input type="file"  name="image" id="input-file-now" class="dropify" />
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-6">
                        <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
                      </div>
                   </div>
                  @include('layouts.errors')
                </form>
              </nav>
            </div>
          </div>



        <!-- Content -->
        <div class="content-area py-1">
          <div class="container-fluid">
            <div class="row mb-1">
              @foreach($sliders as $slide)
              <div class="col-md-4">
                <div class="box bg-white user-3 img-cover" style="background-image: url(/UploadedImages/{{$slide->image}});">
                  <div class="u-content">
                    <h3><a class="text-white" href="#">{{$slide->title}}</a></h3>
                    <p>
                      <h4>{{$slide->subTitle}}</h4>
                    </p>
                    <div class="text-xs-center">
                      <a href="editSlider/{{ $slide->id }}"><button type="submit" class="btn btn-success btn-rounded mx-0-5"><i class="ti-check ml-0-5"></i> ویرایش</button></a>
                      <a href="deleteSlider/{{ $slide->id }}" onclick='return confirm("حذف شود؟")'><button type="submit" class="btn btn-danger btn-rounded mx-0-5"><i class="ti-close ml-0-5"></i> حذف</button></a>
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
