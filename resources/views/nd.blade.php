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
                                        <a href="{{ route('from') }}" class="btn btn-primary" type="button" style=" margin:20px -330px 0 0;">
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

                    <form action="" role="form">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group mb-4">
                                    <select class="form-control" id="" name="">
                                        <option>All</option>
                                        <option value="Browsing">Chờ</option>
                                        <option value="Publish">Còn hàng</option>
                                        <option value="Draft">Hết hàng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <select class="form-control" id="" name="" style="margin-right: 10px;">
                                    <option value="0">Select category</option>

                                </select>
                            </div>


                            <div class="col-md-2">
                                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Tìm kiếm" />
                            </div>

                            <div class="col-md-2">
                                <button type="submit" id="btnSearch" name="btnSearch" class="btn btn-primary">Tìm kiếm</button>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="pb-20">
                    <table class="table stripe hover nowrap ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Vị trí</th>
                                <th>Chiết khấu</th>
                                <th>Hình ảnh</th>
                                <th>Nội dung</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Giá mới</th>
                                <th>Tình trạng</th>
                                <th class="datatable-nosort">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contents as $keg => $conten)

                            <tr>
                                <td>{{ $keg +1 }}</td>
                                <td>
                                    @if($conten->product_type == 'Sp')
                                    Sản phẩm
                                    @elseif($conten->product_type == 'Spm')
                                    Sản phẩm mới
                                    @else
                                    Sản phẩm bán chạy
                                    @endif
                                </td>
                                <td>{{ $conten->discount }}</td>
                                <td>
                                    <img src="/image/{{ $conten->file }}" alt="" width="50" header="50">
                                </td>
                                <td>{!! $conten->content !!}</td>
                                <td>{!! $conten->quantity !!}</td>
                                <td>{{ $conten->old_price }}</td>
                                <td>{{ $conten->price_after_discount }}</td>
                                <td>
                                    @if($conten->status == 'Publish')
                                    Còn hàng
                                    @elseif($conten->status == 'Draft')
                                    Hết hàng
                                    @else
                                    Chờ
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('ndUpdate', ['id' => $conten->id]) }}" onclick="take_url_edit_key('{{$conten->id}}')"><i class="dw dw-edit2"></i> Sửa</a>
                                            <a class="dropdown-item" href="{{ route('nddelete', ['id' => $conten->id]) }}"><i class="dw dw-delete-3"></i> Xóa</a>
                                            <a class="dropdown-item" href="{{ route('ndSee', ['id' => $conten->id]) }}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i> Xem</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div style="justify-content: center;">
                        {!! $contents->links() !!}
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
@endsection

<!-- ->appends($request->all()) -->