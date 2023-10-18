@extends('layout/layouts')
@section('main')                   
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="text-center">
								<h4 class="text-blue h3">Sửa tài khoản</h4>
							</div>
						</div>
						<form action="{{ route('Update', ['id' => $user->id]) }}" method="post">
						@csrf
                            <div class="form-group">
                                <h5 class="mb-1">Username</h5>
                                <input
                                    type="text"
                                    name="Name"
                                    class="form-control form-control-lg"
                                    value="{{ $user->name }}"
                                />
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Email</h5>
                                <input
                                    type="email"
                                    name="Email"
                                    class="form-control form-control-lg"
                                    value="{{ $user->email }}"
                                />
                            </div>
                            @if($errors->has('Email'))
                                <span class="error">{{ $errors->first('Email') }}</span>
                            @endif
                            <div class="form-group">
                                <h5 class="mb-1">Password</h5>
                                <input
                                    class="form-control form-control-lg"
                                    type="password"
                                    name="Password"
                                    placeholder="**********"
                                />
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
                            <a href="{{  route('ndindex')  }} "  class="btn btn-primary btn-lg btn-block">Hủy</a>
				        </form>
					</div>
				</div>
			</div>
		</div>
        <script>
       <script>
            function addConten(){
                Swal.fire('Thêm mới tài khoản thành công', '', 'success')
            }
    </script>
    @endsection