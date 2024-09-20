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
				<link rel="stylesheet" href="{{ asset('../vendor/dropify/dist/css/dropify.min.css') }}">

				<!-- Neptune CSS -->
				<link rel="stylesheet" href="{{ asset('../css/core.css') }}">
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
								<form action = "/editSlider/<?php echo $slider[0]->id; ?>" method = "post" enctype="multipart/form-data" >
     							<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
									 <div class="row form-group">
										 <div class="col-md-6">
											 <label  style="color: black">عنوان اصلی</label>
											 <input type="text" name="title" value = '<?php echo $slider[0]->title; ?>'  class="form-control"  placeholder="عنوان اصلی" required>
										 </div>
										 <div class="col-md-6">
											 <label  style="color: black">عنوان فرعی</label>
											 <input type="text" name="subTitle" value = '<?php echo $slider[0]->subTitle; ?>'  class="form-control"  placeholder="عنوان فرعی" required>
										 </div>
									 </div>
									 <div class="row form-group">
										 <div class="col-md-12">
											 <label  style="color: black">تصویر</label>
											 <input type="hidden" name="image" value="<?php echo $slider[0]->image; ?>">
											 <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/<?php echo $slider[0]->image; ?>" />
										 </div>
									 </div>
									 <div class="row form-group">
										 <div class="col-md-6">
											 <input type="submit"value="ذخیره سازی تغییرات" class="btn btn-success ">
											 <input type="reset"  value="لغو" class="btn btn-warning ">
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