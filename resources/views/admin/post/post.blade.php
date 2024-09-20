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
								<center><h3>ثبت نوشته ها</h3></center>
                <form method="POST" action="{{route('addPost')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row form-group">
                      <div class="col-md-6">
                        <label  style="color: black">عنوان نوشته</label>
                        <input type="text" name="title" value=""  class="form-control"  placeholder="عنوان نوشته" required>
                      </div>
                      <div class="col-md-6">
                        <label  style="color: black">نويسنده</label>
                        <input type="text" name="author" value=""  class="form-control"  placeholder="نويسنده" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-6">
                        <label  style="color: black">متن</label><br>
                        <textarea name="content" rows="10" class="col-md-12" placeholder="متن ..."></textarea>
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
            <div class="box bg-white">
              <div class="table-responsive">
                <table class="table  mail-items mb-0">
                  <tbody>
                    @foreach($posts as $post)
                    <tr class="unread">
                      <td class="mail-item-sender">
                        <a class="mail-item-important" href="#">
                          <i class="fa fa-bookmark fa-rotate-90"></i>
                        </a>
                        <!-- <a class="avatar box-32 mr-0-5" href="#">
                          <img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
                        </a> -->
                        <a href="#">{{$post->title}}</a>
                      </td>
                      <td>
                        <i class="fa fa-circle text-warning mr-0-5"></i>
                        <a href="#">{{$post->author}}</a>
                      </td>
                      <td class="mail-item-attachment">
                        <i></i>
                      </td>
                      <td class="mail-item-time" dir="ltr">
                        <a class="text-success" href="editPost/{{ $post->id }}"><i class="fa fa-edit"></i></a>
                      </td>
                      <td class="mail-item-checkbox">
                        <a class="text-danger" href="deletePost/{{ $post->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="5">  <textarea name="name" rows="10" class="col-lg-12" style="border: 0px solid white">{{$post->content}}</textarea></td>
                    </tr>
                    <tr>
                      <td colspan="5"><center><img src="/UploadedImages/{{$post->image}}" alt="" /></center></td>
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
