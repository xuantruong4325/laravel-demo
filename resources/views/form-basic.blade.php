@extends('layout/layouts')
@section('main')
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h3">Thêm sản phẩm</h4>
							</div>
						</div>
						<form action="{{ route('ndstore') }}" method="POST" role="form" enctype="multipart/form-data">
						@csrf
                            <div class="form-group">
                                
                                <select name="product_type" class="form-control form-control-lg">
                                    <option value="Product_type">---Vị trí---</option>
                                    <option value="Sp">Sản phẩm</option>
                                    <option value="Spm">Sản phẩm mới</option>
                                    <option value="Spbc">Sản phẩm bán chạy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="discount"
                                    class="form-control form-control-lg"
                                    placeholder="Chiết khấu"
                                    oninput="new_price()"
                                    id="discount"
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
									placeholder="Nội dung"
									name="content"
								></textarea>
							</div>
                            <div class="form-group">
                                <input
                                    type="number"
                                    name="old_price"
                                    class="form-control form-control-lg"
                                    placeholder="Giá"
                                    oninput="new_price()"
                                    id="old_price"
                                />
                            </div>
                            <div class="form-group">
                                <h5 class="mb-1">Giá sau khi giảm</h5>
                                <span id="result" class="form-control form-control-lg"></span>
                            </div>
                            <div class="form-group">
                                
                                <select name="status" class="form-control form-control-lg">
                                    <option value="Status">---Trạng thái---</option>
                                    <option value="Publish">Còn hàng</option>
                                    <option value="Draft">Hết hàng</option>
                                    <option value="Browsing">Chờ</option>
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
