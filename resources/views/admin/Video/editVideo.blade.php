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
        <link rel="stylesheet" href="{{ asset('../vendor/bootstrap4-rtl/css/bootstrap.min.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/themify-icons/themify-icons.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/font-awesome/css/font-awesome.min.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/animate.css/animate.min.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/jscrollpane/jquery.jscrollpane.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/waves/waves.min.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/switchery/dist/switchery.min.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/morris/morris.css') }}">
    		<link rel="stylesheet" href="{{ asset('../vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">

    		<!-- Neptune CSS -->
    		<link rel="stylesheet" href="{{ asset('../css/core.css') }}">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="/css/core.css">
	</head>
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
                <center><h3>ویرایش رکورد</h3></center>
								<form action = "/editVideo/<?php echo $video[0]->id; ?>" method = "post" enctype="multipart/form-data" >
									<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
									 <div class="row form-group">
										 <div class="col-md-4">
											 <label  style="color: black">عنوان آهنگ</label>
											 <input type="text" name="title" value="<?php echo $video[0]->title; ?>"  class="form-control"  placeholder="عنوان آهنک در حداکثر 10 کلمه بنویسید" required>
										 </div>
										 <div class="col-md-8">
											 <label  style="color: black"> لینک (URL) یوتیوب</label>
											 <input type="text" name="video" value="<?php echo $video[0]->video; ?>" class="form-control" placeholder=" لینک (URL) یوتیوب" required>
										 </div>
									 </div>
									 <div class="row form-group">
										 <div class="col-md-3">
											 <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
											 <input type="reset" name="reset" value="لغو" class="btn btn-warning">
										 </div>
									</div>
								 @include('layouts.errors')
                </form>
              </nav>
            </div>
          </div>
        @include('admin.footer')
			</div>
		</div>
		@include('admin.js')
	</body>
<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 10:43:36 GMT -->
</html>
