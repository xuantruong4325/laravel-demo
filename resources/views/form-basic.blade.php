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
                        <label for="productType">Chọn hãng sản phẩm</label>
                        <select class="custom-select2 form-control form-control-lg" name="companyId" style="width: 100%; height: 38px">
                            @foreach ($company as $company)
                            <option value="{{$company->id}}">{{$company->name_company}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productType">Chọn loại sản phẩm</label>
                        <select class="custom-select2 form-control form-control-lg" name="categoryId" style="width: 100%; height: 38px">
                            @foreach ($category as $categor)
                            <option value="{{$categor->id}}">{{$categor->name_category}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="productType">Nhập chiết khấu sản phẩm</label>
                        <input type="text" name="discount" class="form-control form-control-lg" oninput="new_price()" id="discount" />
                    </div>
                    <div class="form-group">
                        <label for="productType">Chọn avatar sản phẩm</label>
                        <input type="file" class="form-control-file form-control height-auto" name="file" />
                    </div>
                    <div class="form-group">
                        <label for="productType">Nhập tên sản phẩm</label>
                        <input type="type" class="form-control form-control-lg" name="content" />
                    </div>
                    <div class="form-group">
                        <label for="productType">Nhập số lượng hàng</label>
                        <input type="number" class="form-control form-control-lg" name="quantity" />
                    </div>
                    <div class="form-group">
                        <label for="productType">Nhập giá sản sản phẩm</label>
                        <input type="number" name="old_price" class="form-control form-control-lg" oninput="new_price()" id="old_price" />
                    </div>
                    <div class="form-group">
                        <label for="productType">Giá sau khi giảm</label>
                        <span id="result" class="form-control form-control-lg"></span>
                    </div>
                    <div class="form-group">
                        <label for="productType">Nhập thông số sản phẩm</label>
                        <textarea type="text" class="textarea_editor form-control border-radius-1" name="product_specifications"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="productType">Đánh giá sản phẩm</label>
                        <textarea type="text" class="textarea_editor1 form-control border-radius-1" name="product_reviews" style="height:500px;"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="productType">Trạng thái sản phẩm</label>
                        <select name="status" class="form-control form-control-lg">
                            <option value="Publish">Còn hàng</option>
                            <option value="Draft">Hết hàng</option>
                            <option value="Browsing">Chờ</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="image">Chọn ảnh sản phẩm</label> <input id="imageFiles" name="imageFiles[]" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="image">Chọn ảnh sản phẩm</label> <input id="imageFiles" name="imageFiles[]" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="image">Chọn ảnh sản phẩm</label> <input id="imageFiles" name="imageFiles[]" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="image">Chọn ảnh sản phẩm</label> <input id="imageFiles" name="imageFiles[]" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-bottom: 20px;">
                        <div class="card-header justify-content-between">
                            <div class="col-md-3 pl-0">
                                <h5 class="mb-0 h6">Thông số kỹ thuật</h5>
                            </div>
                            <div class="col-md-3 pr-0 text-right" style="float: right;margin-top: -20px;">
                                <button type="button" class="btn btn-primary add_tskt">Thêm mới</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row" id="table-other-attribute-div" style="">
                                <table id="table-other-attribute" class="table table-bordered">
                                    <thead id="show_item">
                                        <tr>
                                            <td class="text-center">
                                                Thông số
                                            </td>
                                            <td class="text-center">
                                                Nội dung
                                            </td>
                                            <td class="text-center" data-breakpoints="lg">
                                                Lựa chọn
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="margin-bottom: 20px;">
                        <div class="card-header justify-content-between">
                            <div class="col-md-3 pl-0">
                                <h5 class="mb-0 h6">Chọn ưu đãi</h5>
                            </div>
                            <div class="col-md-3 pr-0 text-right" style="float: right;margin-top: -20px;">
                                <button type="button" class="btn btn-primary add_ud">Thêm mới</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row" id="table-other-attribute-div" style="">
                                <table id="table-other-attribute" class="table table-bordered">
                                    <thead id="show_ud">
                                        <tr>
                                            <td class="text-center">
                                                Ưu đãi
                                            </td>
                                            <td class="text-center" data-breakpoints="lg">
                                                Lựa chọn
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js') }}"></script>
<script>
    var test = {!! $techniques !!};
    var endows = {!! $endows !!};
    $(document).ready(function() {
        console.log(test[0]);

        $(".add_tskt").click(function(e) {
            e.preventDefault();
            var option = [];
            for (var tt in test) {
                option.push(`<option value="${test[tt].id}">${test[tt].technique}</option>`);
            }
            var techni = `
                <tr id="remove_item">
                    <td>
                        <div class="form-group">
                            <label for="productType">Chọn thông số</label>
                            <select class="custom-select2 form-control form-control-lg" name="techniques[]" style="width: 100%; height: 38px">
                                ` + option + `
                            </select>
                        </div>
                    </td>
                    <td><input type="text" name="nameTechniques[]" placeholder="Nhập nội dung" class="form-control" required=""></td>
                    <td style="text-align: center;"><button onclick="delete_cell_other_attribute(this)" type="button" class="btn btn-icon btn-sm btn-danger"><i class="dw dw-delete-3 remove_item"></i></button></td>
                </tr>
            `

            $("#show_item").append(techni);
        });
    });

    $(document).ready(function() {
        // console.log(endows[0]);

        $(".add_ud").click(function(e) {
            e.preventDefault();
            var option = [];
            for (var tt in endows) {
                option.push(`<option value="${endows[tt].id}">${endows[tt].nameEndow}</option>`);
            }
            var techni = `
                <tr id="remove_item">
                    <td>
                        <div class="form-group">
                            <label for="productType">Chọn ưu đãi</label>
                            <select class="custom-select2 form-control form-control-lg" name="endows[]" style="width: 100%; height: 38px">
                                ` + option + `
                            </select>
                        </div>
                    </td>
                    <td style="text-align: center;"><button onclick="delete_cell_other_attribute(this)" type="button" class="btn btn-icon btn-sm btn-danger"><i class="dw dw-delete-3 remove_item"></i></button></td>
                </tr>
            `

            $("#show_ud").append(techni);
        });
    });

    function delete_cell_other_attribute(em) {
        $(em).closest('#remove_item').remove();

    }

    function addConten() {
        Swal.fire('Thêm nội dung mới thành công', '', 'success')
    }

    function roundUpToNearest(value, factor) {
        return Math.ceil(value / factor) * factor;
    }

    function new_price() {
        let x = parseFloat(document.getElementById('discount').value);
        let y = parseFloat(document.getElementById('old_price').value);

        if (!isNaN(x) && !isNaN(y)) {
            let test = (100 - x) / 100;
            let gia = y * test;
            gia = Math.round(gia);
            gia = roundUpToNearest(gia,1000);
            document.getElementById('result').textContent = gia;
        } else {
            document.getElementById('result').textContent = '';
        }
    }
</script>
@endsection