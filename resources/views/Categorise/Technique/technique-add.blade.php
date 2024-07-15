@extends('layout/layouts')
@section('main')
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h3">Thêm thông số</h4>
					</div>
				</div>
				<form action="{{ route('addTechniqueSave') }}" method="POST">
					@csrf

					<div class="form-group">
						<h6 class="mb-3">Nhập thông số</h6>
						<input type="text" name="technique" class="form-control form-control-lg" required/>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Xác nhận</button>
				</form>
			</div>
		</div>
	</div>
</div>
@if(session('redirect'))
<script>
	Swal.fire('Thêm mới thông số sản phẩm thành công', '', 'success')
	setTimeout(function() {
		window.location.href = "{{ route('listTechnique') }}";
	}, 500); // Chờ 2 giây trước khi chuyển hướng
</script>
@endif
@if(session('error'))
<script>
	Swal.fire('Thông số sản phẩm đã tồn tại', '', 'error')
</script>
@endif
@endsection