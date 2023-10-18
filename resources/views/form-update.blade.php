@extends('layout/layouts')
@section('main')
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="text-center">
								<h4 class="text-blue h3">Sửa nội dung</h4>
							</div>
						</div>
						<form action="{{ route('ndUpdate', ['id' => $content->id]) }}" method="post" role="form" enctype="multipart/form-data">
						@csrf
                            <div class="form-group">
                                <h5 class="mb-1">Tiêu đề</h5>
                                <input
                                    type="text"
                                    name="title"
                                    class="form-control form-control-lg"
                                    value="{{$content->title}}"
                                />
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Thể loại</h5>
                                <input
                                    type="text"
                                    name="category"
                                    class="form-control form-control-lg"
                                    value="{{$content->category}}"
                                />
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Avartar</h5>
                                <input
                                    class="form-control-file form-control height-auto"
                                    name="file"
                                    type="file"
                                />
                            </div>
							<div class="form-group">
                                <h5 class="mb-1">Nội dung</h5>
								<textarea
									type="text"
									class="textarea_editor form-control border-radius-0"
									name="content"
								>{{$content->content}}</textarea>
							</div>
                            <div class="form-group">
                                <h5 class="mb-1">Tác giả</h5>
                                <input
                                    type="text"
                                    name="author"
                                    class="form-control form-control-lg"
                                    value="{{$content->author}}"
                                />
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Trạng thái</h5>
                                <select name="status" class="form-control form-control-lg" >
                                    <option value="Status">Mời chọn trạng thái</option>
                                    <option value="Publish" {{ $content->status === 'Publish' ? 'selected' : '' }}>Xuất bản</option>
                                    <option value="Draft" {{ $content->status === 'Draft' ? 'selected' : '' }}>Nháp</option>
                                    <option value="Browsing" {{ $content->status === 'Browsing' ? 'selected' : '' }}>Đang duyệt</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
                            <a href="{{  route('ndindex')  }} "  class="btn btn-primary btn-lg btn-block">Hủy</a>
				        </form>
					</div>
				</div>
			</div>
		</div>
        <script>
    //         function take_url_edit_key(id) {
    //     $.ajax({
    //         headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //         type: "POST",
    //         data:{

    //             'id': id
    //         },
    //         url: "",
    //         success: function (response) {
    //             $('form')[1].action = response.url;
    //             $("input[name=title]").val(response.unit_name);
    //         }
    //     });  
    // }
        function addConten(){
            Swal.fire('Sửa nội dung mới thành công', '', 'success')
            }
    </script>
@endsection