@extends('layout/layouts')
@section('main')
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h3">Thêm tài khoản ngân hàng</h4>
					</div>
				</div>
				<form action="{{ route('addBankSave') }}" method="POST" role="form" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<h6 class="mb-3">Nhập tên ngân hàng</h6>
						<input type="text" name="nameBank" class="form-control form-control-lg" />
					</div>
					<div class="form-group">
						<h6 class="mb-3">Nhập tên chủ số tài khoản</h6>
						<input type="text" name="name" class="form-control form-control-lg" />
					</div>
					<div class="form-group">
						<h6 class="mb-3">Nhập số tài khoản</h6>
						<input type="number" name="account_number" class="form-control form-control-lg" />
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group mb-4">
								<label for="image">Chọn ảnh qr</label> <input id="code_qr" name="code_qr" type="file" class="form-control-file">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	function addConten() {
		Swal.fire('Thêm ngân hàng mới thành công', '', 'success')
	}
</script>
@endsection