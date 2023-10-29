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
                                    <div class="row clearfix">
                                        <div class="col-md-4 col-sm-12 mb-30">
                                            <div class="">
                                                <a
                                                    href="{{ route('from') }}"
                                                    class="btn btn-primary"
                                                    type="button"
                                                    style=" margin:20px -330px 0 0;"
                                                >
                                                Thêm nội dung
                                                </a>
                                            </div>
                                        </div>
					                </div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Nội dung</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap ">
								<thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ảnh Banner</th>
                                    <th>Ảnh Footer_left</th>
                                    <th>Ảnh Footer_right</th>
                                    <th class="datatable-nosort">Hành động</th>
                                </tr>
								</thead>
								<tbody>
                                <tr>
                                    <th>#</th>
                                    <td>
                                        <img src="" alt="" width="50" header="50">
                                    </td>
                                    <td>
                                        <img src="" alt="" width="50" header="50">
                                    </td>
                                    <td>
                                        <img src="" alt="" width="50" header="50">
                                    </td>
                                    <th class="datatable-nosort">Hành động</th>
                                </tr>
                                    
                               
                            </tbody>
						</table>
					</div>
                        
				</div>


			</div>
		</div>
	</div>
@endsection
