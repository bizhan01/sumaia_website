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
								<form action = "/editAct/<?php echo $activity[0]->id; ?>" method = "post" enctype="multipart/form-data" >
									<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <div class="input-group">
                    <input type="text" name="activity" value="<?php echo $activity[0]->activity; ?>" class="form-control b-a" placeholder="لطفا فعالیت های عمده تان را در حداکثر 10 کلمه بیان نماید" required>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-success b-a">
                        <i class="fa fa-save">  ذخیره سازی تغییرات </i>
                      </button>
                    </span>
                  </div> <br>
									<button type="reset" class="btn btn-rounded btn-warning"><li class="fa fa-remove"> لغو</li></button>
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
