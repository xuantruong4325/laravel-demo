@extends('layout/layouts')
@section('main')
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
                                                Thêm nội dung
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
                                                                        Thêm nội dung
                                                                    </h2>
                                                                </div>
                                                                <form action="{{ route('ndstore') }}" method="POST" role="form" enctype="multipart/form-data">
                                                                    
                                                                    
                                                                    @csrf
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="text"
                                                                            name="title"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="Tiêu đề"
                                                                        />
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="text"
                                                                            name="category"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="thể loại"
                                                                        />
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="file"
                                                                            class="form-control-file form-control height-auto"
                                                                            name="file"
                                                                        />
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="text"
                                                                            name="content"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="nội dung"
                                                                        />
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        <input
                                                                            type="text"
                                                                            name="author"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="tác giả"
                                                                        />
                                                                    </div>
                                                                    <div class="input-group custom">
                                                                        
                                                                        <select name="status" class="form-control form-control-lg">
                                                                            <option value="Status">---Trạng thái---</option>
                                                                            <option value="Publish">Xuất bản</option>
                                                                            <option value="Draft">Nháp</option>
                                                                            <option value="Browsing">Đang duyệt</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="input-group mb-0">
                                                                                <!--
                                                                                use code for form submit
                                                                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                                                                -->
                                                                                    
                                                                                <button type="submit"><a
                                                                                    class="btn btn-primary btn-lg btn-block"
                                                                                    
                                                                                    >Xác nhận</a
                                                                                ></button>
                                                                                
                                                                                <a
                                                                                    class="btn btn-primary btn-lg btn-block"
                                                                                    href=""
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
							<h4 class="text-blue h4">Nội dung</h4>
							
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tiêu đề</th>
                                    <th>Thể loại</th>
                                    <th>Hình ảnh</th>
                                    <th>Nội dung</th>
                                    <th>Tác giả</th>
                                    <th>Trạng thái</th>
                                    <th class="datatable-nosort">Hành động</th>
                                </tr>
								</thead>
								<tbody>
                                   
                                    @foreach ($contents as $conten) 
                                    
                                        <tr>
                                            <td >#</td>
                                            <td>{{ $conten->title }}</td>
                                            <td>{{ $conten->category }}</td>
                                            <td>
                                                <img src="/image/{{ $conten->file }}" alt="" width="100">
                                            </td>
                                            <td>{{ $conten->content }}</td>
                                            <td>{{ $conten->author }}</td>
                                            <td>
                                                @if($conten->status == 'Publish')
                                                    Xuất bản
                                                @elseif($conten->status == 'Draft')
                                                    Nháp
                                                @else 
                                                    Đang duyệt
                                                @endif
                                            </td>
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
													<a class="dropdown-item" href="{{ route('ndUpdate', ['id' => $conten->id]) }}"
														><i class="dw dw-edit2"></i> Sửa</a
													>
													<a class="dropdown-item" href="{{ route('nddelete', ['id' => $conten->id]) }}"
														><i class="dw dw-delete-3"></i> Xóa</a
													>
                                                    <a class="dropdown-item" href="{{ route('ndSee', ['id' => $conten->id]) }}"
														><i class="icon-copy fa fa-eye" aria-hidden="true"></i> Xem</a
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
