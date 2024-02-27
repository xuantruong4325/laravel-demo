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
                            <h5 class="mb-1">Vị trí</h5>
                                <select name="product_type" class="form-control form-control-lg">
                                    <option value="Product_type">---Vị trí---</option>
                                    <option value="Sp" {{ $content->product_type === 'Sp' ? 'selected' : '' }}>Sản phẩm</option>
                                    <option value="Spm" {{ $content->product_type === 'Spm' ? 'selected' : '' }}>Sản phẩm mới</option>
                                    <option value="Spbc" {{ $content->product_type === 'Spbc' ? 'selected' : '' }}>Sản phẩm bán chạy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Chiết khấu</h5>
                                <input
                                    type="text"
                                    name="discount"
                                    class="form-control form-control-lg"
                                    value="{{$content->discount}}"
                                    oninput="new_price()"
                                    id="discount"
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
                                <h5 class="mb-1">Giá</h5>
                                <input
                                    type="text"
                                    name="old_price"
                                    class="form-control form-control-lg"
                                    value="{{$content->old_price}}"
                                    oninput="new_price()"
                                    id="old_price"
                                />
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Giá sau khi giảm</h5>
                                <span id="result" class="form-control form-control-lg">{{$content->price_after_discount}}</span>
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Trạng thái</h5>
                                <select name="status" class="form-control form-control-lg" >
                                    <option value="Status">Mời chọn trạng thái</option>
                                    <option value="Publish" {{ $content->status === 'Publish' ? 'selected' : '' }}>Còn hàng</option>
                                    <option value="Draft" {{ $content->status === 'Draft' ? 'selected' : '' }}>Hết hàng</option>
                                    <option value="Browsing" {{ $content->status === 'Browsing' ? 'selected' : '' }}>Chờ</option>
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
        function new_price() {
            let x = parseFloat(document.getElementById('discount').value);
            let y = parseFloat(document.getElementById('old_price').value);

            if (!isNaN(x) && !isNaN(y)) {
                let test = (100 - x) / 100;
                let gia = y * test;
                gia = Math.round(gia);
                document.getElementById('result').textContent = gia;
            } else {
                document.getElementById('result').textContent = '';
            }
        }
    </script>
@endsection