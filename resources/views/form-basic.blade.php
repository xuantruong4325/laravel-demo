@extends('layout/layouts')
@section('main')
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h3">Thêm nội dung</h4>
							</div>
						</div>
						<form action="{{ route('ndstore') }}" method="POST" role="form" enctype="multipart/form-data">
						@csrf
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="title"
                                    class="form-control form-control-lg"
                                    placeholder="Tiêu đề"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="category"
                                    class="form-control form-control-lg"
                                    placeholder="thể loại"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="file"
                                    class="form-control-file form-control height-auto"
                                    name="file"
                                />
                            </div>
							<div class="form-group">
								<textarea
									type="text"
									class="textarea_editor form-control border-radius-0"
									placeholder="nội dung"
									name="content"
								></textarea>
							</div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="author"
                                    class="form-control form-control-lg"
                                    placeholder="tác giả"
                                />
                            </div>
                            <div class="form-group">
                                
                                <select name="status" class="form-control form-control-lg">
                                    <option value="Status">---Trạng thái---</option>
                                    <option value="Publish">Xuất bản</option>
                                    <option value="Draft">Nháp</option>
                                    <option value="Browsing">Đang duyệt</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
				        </form>
					</div>
				</div>
			</div>
		</div>
        <script>
        function addConten(){
                Swal.fire('Thêm nội dung mới thành công', '', 'success')
            }
    </script>
@endsection
