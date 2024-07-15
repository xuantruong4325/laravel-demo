@extends('layout/layouts')
@section('main')
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h3">Sửa ưu đãi</h4>
					</div>
				</div>
				<form action="{{ route('editEndowSave', ['id' => $endow->id]) }}" method="POST">
					@csrf

					<div class="form-group">
						<h6 class="mb-3">Sửa ưu đãi</h6>
						<input type="text" name="endow" class="form-control form-control-lg" value="{{ $endow->nameEndow }}" required />
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Xác nhận</button>
				</form>
			</div>
		</div>
	</div>
</div>
@if(session('redirect'))
<script>
	Swal.fire('Sửa ưu đãi sản phẩm thành công', '', 'success')
	setTimeout(function() {
		window.location.href = "{{ route('listEndow') }}";
	}, 500); // Chờ 2 giây trước khi chuyển hướng
</script>
@endif
@if(session('error'))
<script>
	Swal.fire('Ưu đãi phẩm đã tồn tại', '', 'error')
</script>
@endif
@endsection