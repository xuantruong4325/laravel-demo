@extends('layout/layouts')
@section('main')

    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<!-- <a
										class="btn btn-primary "
										href="#"
										role="button"
									>
										Thêm tài khoản
									</a> -->
                                    <div class="row clearfix">
                                        <div class="col-md-4 col-sm-12 mb-30">
                                            <div class="">
                                                <a
                                                    href="#"
                                                    class="btn btn-primary"
                                                    data-backdrop="static"
                                                    data-toggle="modal"
                                                    data-target="#login-modal"
                                                    type="button"
                                                    style=" margin:20px -330px 0 0;"
                                                >
                                                Thêm tài khoản
                                                </a>
                                                <div
                                                    class="modal fade"
                                                    id="login-modal"
                                                    tabindex="-1"
                                                    role="dialog"
                                                    aria-labelledby="myLargeModalLabel"
                                                    aria-hidden="true"
                                                >
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div
                                                                class="login-box bg-white box-shadow border-radius-10"
                                                            >
                                                                <div class="login-title">
                                                                    <h2 class="text-center text-primary">
                                                                        Thêm tài khoản
                                                                    </h2>
                                                                </div>
                                                                <form action="{{ route('store') }}" method="POST">
                                                                    @csrf
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="text"
                                                                            name="name"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="Username"
                                                                        />
                                                                        <div class="input-group-append custom">
                                                                            <span class="input-group-text"
                                                                                ><i class="icon-copy dw dw-user1"></i
                                                                            ></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        
                                                                    <select name="user_type"  class="form-control form-control-lg">
                                                                        <option value="user">user</option>
                                                                        <option value="admin">admin</option>
                                                                    </select>
                                                                        
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="email"
                                                                            name="email"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="Email"
                                                                        />
                                                                        <div class="input-group-append custom">
                                                                            <span class="input-group-text"
                                                                                ><i class="icon-copy dw dw-email1"></i
                                                                            ></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="password"
                                                                            name="password"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="**********"
                                                                        />
                                                                        <div class="input-group-append custom">
                                                                            <span class="input-group-text"
                                                                                ><i class="dw dw-padlock1"></i
                                                                            ></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-30">
                                                                        <div class="col-6">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input
                                                                                    type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="customCheck1"
                                                                                />
                                                                                <label
                                                                                    class="custom-control-label"
                                                                                    for="customCheck1"
                                                                                    >Remember</label
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="forgot-password">
                                                                                <a href="forgot-password.html"
                                                                                    >Forgot Password</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="input-group mb-0">
                                                                                <!--
                                                                                use code for form submit
                                                                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                                                                -->
                                                                                    @if($errors->has('email'))
                                                                                    <span class="error">{{ $errors->first('email') }}</span>
                                                                                    @endif
                                                                                <button type="submit"><a
                                                                                    class="btn btn-primary btn-lg btn-block"
                                                                                    
                                                                                    >Xác nhận</a
                                                                                ></button>
                                                                                
                                                                                <a
                                                                                    class="btn btn-primary btn-lg btn-block"
                                                                                    
                                                                                    type="submit"
                                                                                    >Quay lại</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
					                </div>
								</div>
							</div>
						</div>
					</div>
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
                                @foreach ($users as $user)
                                    <tr>
                                        <td >#</td>
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


    @endsection