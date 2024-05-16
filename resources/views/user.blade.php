@extends('layout/layouts')
@section('main')

    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Danh sách tài khoản đã đăng ký</h4>
							<!-- <p class="mb-0">
								you can find more options
								<a
									class="text-primary"
									href="https://datatables.net/"
									target="_blank"
									>Click Here</a
								>
							</p> -->
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Kiểu người dùng</th>
                                    <th>Thời gian tạo</th>
                                    <th>Sửa đổi lần cuối</th>
                                    <th class="datatable-nosort">Tùy chọn</th>
                                </tr>
								</thead>
								<tbody>
                                @foreach ($users as $keg => $user)
                                    <tr>
                                        <td >{{ $keg+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td >{{ $user->email }}</td>
                                        <td>{{ $user->user_type }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            <div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="{{ route('Update', ['id' => $user->id]) }}"
														><i class="dw dw-edit2"></i> Sửa</a
													>
													<a class="dropdown-item" href="{{ route('delete', ['id' => $user->id]) }}"
														><i class="dw dw-delete-3"></i> Xóa</a
													>
												</div>
											</div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
							</table>
						</div>
                        
					</div>
				</div>
			</div>
		</div>
        <script>
            function addConten(){
                Swal.fire('Thêm mới tài khoản thành công', '', 'success')
            }
    </script>

    @endsection