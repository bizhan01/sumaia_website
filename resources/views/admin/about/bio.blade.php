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
								<center><h3>ثبت بیوگرافی هنرمند</h3></center>
                <form method="POST" action="{{route('addBio')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row form-group">
                      <div class="col-md-6">
                        <label  style="color: black">اسم کامل</label>
                        <input type="text" name="name" value=""  class="form-control"  placeholder="اسم کامل" required>
                      </div>
                      <div class="col-md-6">
                        <label  style="color: black">شعار</label>
                        <input type="text" name="motto" value=""  class="form-control"  placeholder="شعار" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-6">
                        <label  style="color: black">بیوگرافی</label><br>
                        <textarea name="biography" rows="10" class="col-md-12" placeholder="لطفا بیوگرافی تان را در حداکثر 300 کلمه بنویسید"></textarea>
                      </div>
                      <div class="col-md-6">
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
           <div class="col-lg-12 box box-block bg-white">
             <center><h3>نمایش بیوگرافی</h3></center>

             <div class="row mb-0 mb-md-1">
              @foreach($biographies as $bio)
               <div class="col-md-12">
                 <div class="box bg-white post post-2">
                   <div class="p-img img-cover" style="background-image: url(/UploadedImages/{{$bio->image}});"></div>
                   <div class="p-content">
                     <h5 class="text-truncate"><a class="text-black" href="#">{{$bio->name}}</a></h5>
                     <div class="p-text"><p class="mb-0-5">{{$bio->biography}} <a class="text-primary" href="#"></a></p></div>
                     <span class="small text-uppercase text-muted" dir="ltr">{{$bio->created_at->diffForHumans()}}</span>
                     <div class="p-info">
                       <a class="text-success" href="editBio/{{ $bio->id }}"><i class="fa fa-edit"></i><br>ویرایش</a>
                       <a class="text-danger" href="deleteBio/{{ $bio->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash"></i><br>حذف</a>
                     </div>
                   </div>
                 </div>
               </div>
               @endforeach
             </div>
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
