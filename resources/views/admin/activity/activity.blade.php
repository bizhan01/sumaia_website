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
								<center><h3>ثبت فعالیت ها</h3></center>
								<form method="POST" action="{{route('addAct')}}" enctype="multipart/form-data">
				           {{ csrf_field() }}
                  <div class="input-group">
                    <input type="text" name="activity" class="form-control b-a" placeholder="لطفا فعالیت های عمده تان را در حداکثر 10 کلمه بیان نماید" required>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary b-a">
                        <i class="fa fa-save">  ذخیره کردن </i>
                      </button>
                    </span>
                  </div>
                </form>
              </nav>
            </div>
          </div>

        <!-- Content -->
        <div class="content-area py-1">
          <div class="container-fluid">
           <div class="col-lg-12 box box-block bg-white">
             <center><h3>فعالیت ها</h3></center>
              <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                  <tr>
                    <th colspan="3" >فعالیت </th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($activities as $activity)
                  <tr>
                    <td colspan="3">{{$activity->activity}}</td>
                    <td>
                      <a class="text-success" href="editAct/{{ $activity->id }}"><i class="fa fa-edit btn btn-rounded btn-success"></i></a>
                    </td>
                    <td>
                        <a class="text-danger" href="deleteAct/{{ $activity->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash btn btn-rounded btn-danger"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
