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
								<center><h3>اضافه نمودن آهنگ جدید</h3></center>
                <form method="POST" action="{{route('addVideo')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row form-group">
                      <div class="col-md-4">
                        <label  style="color: black">عنوان آهنگ</label>
                        <input type="text" name="title" value=""  class="form-control"  placeholder="عنوان آهنک در حداکثر 10 کلمه بنویسید" required>
                      </div>
                      <div class="col-md-8">
                        <label  style="color: black"> لینک (URL) یوتیوب</label>
                        <input type="text" name="video" value="" class="form-control" placeholder=" لینک (URL) یوتیوب" required>
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
                @foreach($videos as $video)
                <div class="col-md-4">
                  <div class="box bg-white user-5">
                   <iframe width="100%" height="200" src="{{$video->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="u-content">
                      <h6>{{$video->title}}</h6>
                      <center>
                         <table>
                          <tbody>
                            <tr>
                              <td>
                                <a class="text-success" href="editVideo/{{ $video->id }}"><i class="fa fa-edit btn bg-twitter btn-circle mx-0-5"></i></a>
                              </td>
                              <td>
                              <a class="text-danger" href="deleteVideo/{{ $video->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash btn  btn-danger btn-circle mx-0-5"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                     </center>
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
