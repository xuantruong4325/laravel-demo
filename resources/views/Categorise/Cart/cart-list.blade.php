@extends('layout/layouts')
@section('main')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Danh sách loại sản phẩm</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên khách hàng</th>
                                <th>Id khách hàng</th>
                                <th>Tên sản phẩm</th>
                                <th></th>
                                <th>Ngày sửa đổi</th>
                                <th class="datatable-nosort">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($carts as $keg => $cart)

                            <tr>
                                <td>{{ $keg +1 }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href=""><i class="dw dw-edit2"></i> Xem</a>
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