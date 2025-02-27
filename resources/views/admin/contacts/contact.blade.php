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

        <!-- Content -->
        <div class="content-area py-1">
          <div class="container-fluid">
            <div class="box bg-white">
              <center><h3>پیام ها</h3></center>
              <div class="table-responsive">
                <table class="table table-hover mail-items mb-0">
                  <tbody>
                    @foreach($contacts as $contact)
                    <tr class="unread">
                      <td class="mail-item-sender">
                        <a class="mail-item-important" href="#">
                          <i class="fa fa-bookmark fa-rotate-90"></i>
                        </a>

                        <a href="#">{{$contact->name}}</a>
                      </td>
                      <td>
                        <i class="fa fa-circle text-primary mr-0-5"></i>
                        <a href="#">{{$contact->subject}}</a>
                      </td>
                      <td class="mail-item-attachment">
                        <i>{{$contact->email}}</i>
                      </td>
                      <td class="mail-item-time" dir="ltr">
                        {{$contact->created_at->diffForHumans()}}
                      </td>
                      <td class="mail-item-checkbox">
                        <label class="custom-control custom-checkbox">
                        <a class="text-danger" href="deleteContact/{{ $contact->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash btn btn-rounded btn-danger"></i></a>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="5">{{$contact->message}}</td>
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
