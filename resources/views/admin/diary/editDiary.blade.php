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
								<form action = "/editDiary/<?php echo $diary[0]->id; ?>" method = "post" enctype="multipart/form-data" >
									<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
									 <div class="row form-group">
										 <div class="col-md-2">
											 <label  style="color: black">روز</label>
											 <select class="form-control" name="day" value="<?php echo $diary[0]->day; ?>" required>
												 <option><?php echo $diary[0]->day; ?></option>
												 <option>01</option>
												 <option>02</option>
												 <option>03</option>
												 <option>04</option>
												 <option>05</option>
												 <option>06</option>
												 <option>07</option>
												 <option>08</option>
												 <option>09</option>
												 <option>10</option>
												 <option>11</option>
												 <option>12</option>
												 <option>13</option>
												 <option>14</option>
												 <option>15</option>
												 <option>16</option>
												 <option>17</option>
												 <option>18</option>
												 <option>19</option>
												 <option>20</option>
												 <option>21</option>
												 <option>22</option>
												 <option>23</option>
												 <option>24</option>
												 <option>25</option>
												 <option>26</option>
												 <option>27</option>
												 <option>28</option>
												 <option>29</option>
												 <option>30</option>
												 <option>31</option>
											 </select>
										 </div>
										 <div class="col-md-2">
											 <label  style="color: black">ماه</label>
											 <select class="form-control" name="month" value="<?php echo $diary[0]->month; ?>" required>
												 <option><?php echo $diary[0]->month; ?></option>
												 <option>حمل</option>
												 <option>ثور</option>
												 <option>جوزا</option>
												 <option>سرطان</option>
												 <option>اسد</option>
												 <option>سنبله</option>
												 <option>میزان</option>
												 <option>عقرب</option>
												 <option>قوس</option>
												 <option>جدی</option>
												 <option>دلو</option>
												 <option>حوت</option>
											 </select>
										 </div>
										 <div class="col-md-2">
											 <label  style="color: black">سال</label>
											 <input type="text" name="year" value="<?php echo $diary[0]->year; ?>" min="4" max="4"  class="form-control"  placeholder="سال" required>
										 </div>
										 <div class="col-md-6">
											 <label  style="color: black">عنوان خاطره</label>
											 <input type="text" name="title" value="<?php echo $diary[0]->title; ?>"  class="form-control"  placeholder="عنوان خاطره" required>
										 </div>
									 </div>
									 <div class="row form-group">
										 <div class="col-md-12">
											 <label  style="color: black">تفصیل</label><br>
											 <textarea name="content" rows="10" class="col-md-12" placeholder="تفصیل..."><?php echo $diary[0]->content; ?></textarea>
										 </div>
									 </div>
									 <div class="row form-group">
										 <div class="col-md-6">
											 <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
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
