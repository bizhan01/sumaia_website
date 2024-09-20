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
           <div class="col-lg-12 box box-block bg-white">
             <center><h3>لیست ایمیل ها</h3></center>
              <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                  <tr>
                    <th>شماره</th>
                    <th>تاریخ</th>
                    <th>ایمیل</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($subscribes as $subscribe)
                  <tr>
                    <td >{{$subscribe->id}}</td>
                    <td >{{$subscribe->created_at}}</td>
                    <td >{{$subscribe->email}}</td>
                    <td>
                      <a class="text-danger" href="deleteEmail/{{ $subscribe->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash btn btn-rounded btn-danger"></i></a>
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
