@extends('layout/layouts')
@section('main')
    <div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Layout</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap ">
								<thead>
                                <tr>
                                    <th>#</th>
                                    <th>Câu chào</th>
                                    <th>Ảnh Banner 1</th>
                                    <th>Ảnh Banner 2</th>
                                    <th>Ảnh Banner 3</th>
                                    <th>Ảnh Banner 4</th>
                                    <th>Ảnh Banner cart</th>
                                    <th>Ảnh Footer_left</th>
                                    <th>Ảnh Footer_right</th>
                                    <th class="datatable-nosort">Hành động</th>
                                </tr>
								</thead>
								<tbody>
                                    @foreach ($editfooter as $editfooters) 
                                        <tr>
                                            <th>#</th>
                                            <td>{{ $editfooters->name }}</td>
                                            <td>
                                                <img src="/FileImage/Layout/{{ $editfooters->file_banner1 }}" alt="" width="50" header="50">
                                            </td>
                                            <td>
                                                <img src="/FileImage/Layout/{{ $editfooters->file_banner2 }}" alt="" width="50" header="50">
                                            </td>
                                            <td>
                                                <img src="/FileImage/Layout/{{ $editfooters->file_banner3 }}" alt="" width="50" header="50">
                                            </td>
                                            <td>
                                                <img src="/FileImage/Layout/{{ $editfooters->file_banner4 }}" alt="" width="50" header="50">
                                            </td>
                                            <td>
                                                <img src="/FileImage/Layout/{{ $editfooters->file_cart }}" alt="" width="50" header="50">
                                            </td>
                                            <td>
                                                <img src="/FileImage/Layout/{{ $editfooters->file_footer_left }}" alt="" width="50" header="50">
                                            </td>
                                            <td>
                                                <img src="/FileImage/Layout/{{ $editfooters->file_footer_right }}" alt="" width="50" header="50">
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
													<a class="dropdown-item" href="{{ route('from_footer', ['id' => $editfooters->id]) }}"
                                                    onclick="take_url_edit_key('{{$editfooters->id}}')"
														><i class="dw dw-edit2"></i> Sửa</a
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
