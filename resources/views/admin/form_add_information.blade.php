@extends('layout/layouts')
@section('main')
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="text-center">
								<h4 class="text-blue h3">Thêm thông số kỹ thuật</h4>
							</div>
						</div>
						<form action="{{ route('add_information_save') }}" method="post" role="form" enctype="multipart/form-data">
						@csrf
                        <div class="form-group">
                            <div class="form-group">
                                <h5 class="mb-1">Thông số kỹ thuật</h5>
                                <input
                                    class="form-control-file form-control height-auto"
                                    name="technicaInformation"
                                    type="text"
                                />
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
                            <a href="{{  route('technicaInformation')  }} "  class="btn btn-primary btn-lg btn-block">Hủy</a>
				        </form>
					</div>
				</div>
			</div>
		</div>
        <script>
        function addConten(){
            Swal.fire('Thêm kỹ thuật thành công', '', 'success')
        }
    </script>
@endsection