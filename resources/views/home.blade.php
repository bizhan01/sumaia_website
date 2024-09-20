<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 10:29:53 GMT -->
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Title -->
		<title>Sumaia Karimi - Admin</title>
	  @include('admin.css')
		<!-- Neptune CSS -->
	</head>
	<body class="fixed-sidebar fixed-header skin-default">
		<div class="wrapper">
			<!-- Preloader -->
			<div class="preloader"></div>
			@include('admin.aside')
			@include('admin.header')
			<div class="site-content">
				<!-- Content -->

								<!-- Content -->
				<div class="content-area py-1">
				  <div class="container-fluid">
				    <div class="row row-md mb-1">
				      <div class="col-lg-4 col-md-4 col-sm-4"> </div>
				      <div class="col-md-4">
				        <div class="box bg-white user-1">
				          <div class="u-img img-cover" style="background-image: url(img/photos-1/4.jpg);"></div>
				          <div class="u-content">
				            <div class="avatar box-64">
				                <img class="b-a-radius-circle shadow-white" src="/img/avatars/1.jpg" alt="">
				              <i class="status bg-success bottom right"></i>
				            </div>
				            <h5><a class="text-black" href="#">{{ Auth::user()->name }}</a></h5>
				            <p class="text-muted pb-0-5">ثبت کننده</p>
				            <div class="text-xs-center pb-0-5">
				              <button type="submit" class="btn btn-primary btn-rounded mr-0-5">ویرایش پروفایل </button>
				              <!-- <button type="submit" class="btn btn-danger btn-rounded">خروج از سیستم</button> -->
				              <a  href="{{ route('logout') }}"
				                 onclick="event.preventDefault();
				                               document.getElementById('logout-form').submit();">
				                  <button type="submit" class="btn btn-danger btn-rounded">خروج از سیستم</button>
				              </a>
				              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                  @csrf
				              </form>
				            </div>
				          </div>
				          <div class="u-counters">
				            <div class="row no-gutter">
				              <div class="col-xs-6 uc-item">
				                <a class="text-black" href="#">
				                  <strong>ساعت</strong> <br>
				                  <strong><?php echo date('h-m-s') ?></strong>
				                </a>
				              </div>
				              <div class="col-xs-6 uc-item">
				                <a class="text-black" href="#">
				                  <strong>تاریخ</strong> <br>
				                  <strong><?php echo date('Y-M-D') ?></strong>
				                </a>
				              </div>
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>


				    <div class="row row-md">
				      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        <div class="box box-block tile tile-2 bg-info mb-2">
				          <div class="t-icon right"><i class="fa fa-image"></i></div>
				          <div class="t-content">
				            <h1 class="mb-1">{{$photoCount}}</h1>
				            <h6 class="text-uppercase">تصاویر</h6>
				          </div>
				        </div>
				      </div>
				      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        <div class="box box-block tile tile-2 bg-danger mb-2">
				          <div class="t-icon right"><i class="fa fa-music"></i></div>
				          <div class="t-content">
				            <h1 class="mb-1">{{$videoCount}}</h1>
				            <h6 class="text-uppercase">آهنگ ها</h6>
				          </div>
				        </div>
				      </div>

				      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        <div class="box box-block tile tile-2 bg-primary mb-2">
				          <div class="t-icon right"><i class="fa fa-edit"></i></div>
				          <div class="t-content">
				            <h1 class="mb-1">{{$postCount}}</h1>
				            <h6 class="text-uppercase">نوشته ها</h6>
				          </div>
				        </div>
				      </div>

				      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        <div class="box box-block tile tile-2 bg-success mb-2">
				          <div class="t-icon right"><i class="fa fa-send"></i></div>
				          <div class="t-content">
				            <h1 class="mb-1">{{$contactCount}}</h1>
				            <h6 class="text-uppercase">پیام ها</h6>
				          </div>
				        </div>
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
