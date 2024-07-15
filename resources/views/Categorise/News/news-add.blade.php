@extends('layout/layouts')
@section('main')
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h3">Thêm tin tức</h4>
					</div>
				</div>
				<form action="{{ route('addNewsSave') }}" method="POST" role="form" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<h6 class="mb-3">Nhập tiêu đề</h6>
						<input type="text" name="title" class="form-control form-control-lg" required/>
					</div>
					<div class="form-group">
						<h6 class="mb-3">Nội dung tiêu đề</h6>
						<input type="text" name="content_title" class="form-control form-control-lg" required/>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group mb-4">
								<h6 class="mb-3">Chọn ảnh tin tức</h6>
								<input name="avatar" type="file" class="form-control-file" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<h6 class="mb-3">Nhập nội dung tin tức</h6>
						<textarea type="text" class="textarea_editor1 form-control border-radius-1" style="height: 500px;" name="content" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Xác nhận</button>
				</form>
			</div>
		</div>
	</div>
</div>
@if(session('redirect'))
<script>
	Swal.fire('Thêm mới tin tức thành công', '', 'success')
	setTimeout(function() {
		window.location.href = "{{ route('listNews') }}";
	}, 500); // Chờ 2 giây trước khi chuyển hướng
</script>
@endif
@endsection