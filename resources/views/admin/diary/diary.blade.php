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
              <center><h3>ثبت خاطرات</h3></center>
              <form method="POST" action="{{route('addDiary')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="row form-group">
                    <div class="col-md-2">
                      <label  style="color: black">روز</label>
                      <select class="form-control" name="day" required>
                        <option value="">انتخاب کنید</option>
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
                      <select class="form-control" name="month" required>
                        <option value="">انتخاب کنید</option>
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
                      <input type="text" name="year" value="" min="4" max="4"  class="form-control"  placeholder="سال" required>
                    </div>
                    <div class="col-md-6">
                      <label  style="color: black">عنوان خاطره</label>
                      <input type="text" name="title" value=""  class="form-control"  placeholder="عنوان خاطره" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <label  style="color: black">تفصیل</label><br>
                      <textarea name="content" rows="10" class="col-md-12" placeholder="تفصیل..."></textarea>
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
            <div class="box bg-white">
              <div class="table-responsive">
                <table class="table table-hover mail-items mb-0">
                  <tbody>
                    @foreach($diaries as $diary)
                    <tr class="unread">
                      <td class="mail-item-sender">
                        <a class="mail-item-important" href="#">
                          <i class="fa fa-bookmark fa-rotate-90"></i>
                        </a>
                        <!-- <a class="avatar box-32 mr-0-5" href="#">
                          <img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
                        </a> -->
                        <a href="#">{{$diary->day}} {{$diary->month}} {{$diary->year}}</a>
                      </td>
                      <td>
                        <i class="fa fa-circle text-warning mr-0-5"></i>
                        <a href="#">{{$diary->title}}</a>
                      </td>
                      <td class="mail-item-attachment">
                        <i></i>
                      </td>
                      <td class="mail-item-time" dir="ltr">
                        <a class="text-success" href="editDiary/{{ $diary->id }}"><i class="fa fa-edit btn btn-rounded btn-success"></i></a>
                      </td>
                      <td class="mail-item-checkbox">
                        <label class="custom-control custom-checkbox">
                          <a class="text-danger" href="deleteDiary/{{ $diary->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash btn btn-rounded btn-danger"></i></a>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="5">{{$diary->content}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
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
