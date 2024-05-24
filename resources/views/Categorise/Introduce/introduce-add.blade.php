@extends('layout/layouts')
@section('main')
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h3">Thông tin giới thiệu</h4>
					</div>
				</div>
				<form action="{{ route('addIntroducesSave') }}" method="POST">
					@csrf

					<div class="form-group">
						<label for="productType">Nhập Thông tin chung</label>
						<textarea style="height: 300px;" type="text" class="textarea_editor form-control border-radius-1" name="general_info"></textarea>
					</div>

					<div class="form-group">
						<label for="productType">Nhập thông tin thêm</label>
						<textarea style="height: 500px;" type="text" class="textarea_editor1 form-control border-radius-1" name="aditional_info"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	function addConten() {
		Swal.fire('Thêm thông tin mới thành công', '', 'success')
	}
</script>
@endsection