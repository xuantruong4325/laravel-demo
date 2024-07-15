@extends('layout/layouts')
@section('main')
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h3">Sửa loại sản phẩm</h4>
					</div>
				</div>
				<form action="{{ route('editCategorySave', ['id' => $category->id]) }}" method="POST">
					@csrf

					<div class="form-group">
						<h6 class="mb-3">Sửa loại sản phẩm</h6>
						<input type="text" name="categoryName" class="form-control form-control-lg" value="{{ $category->name_category }}" required />
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
				</form>
			</div>
		</div>
	</div>
</div>
@if(session('redirect'))
<script>
	Swal.fire('Thêm mới loại sản phẩm thành công', '', 'success')
	setTimeout(function() {
		window.location.href = "{{ route('listCategory') }}";
	}, 500); // Chờ 2 giây trước khi chuyển hướng
</script>
@endif
@if(session('error'))
<script>
	Swal.fire('Loại sản phẩm đã tồn tại', '', 'error')
</script>
@endif
@endsection