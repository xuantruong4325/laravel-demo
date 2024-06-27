@extends('layout/layouts')
@section('main')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Nội dung</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số điện thoại</th>
                                <th>Hình thức thanh toán</th>
                                <th>Tổng tiền</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th class="datatable-nosort">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carts as $keg => $cart)
                            <tr>
                                <td>{{ $keg+1 }}</td>
                                <td>{{ $cart->nameUser }}</td>
                                <td>{{ $cart->phoneUser }}</td>
                                <td>@if($cart->payments == '0')
                                    Tiền mặt
                                    @elseif($cart->payments == '1')
                                    Chuyển khoản
                                    @else
                                    Qua mã qr
                                    @endif</td>
                                <td>{{ $cart->totalProduct }}</td>
                                <td>{{ $cart->totalPrice }}</td>
                                <td>
                                    @if($cart->order_status == '0')
                                    Chờ xác nhận
                                    @elseif($cart->order_status == '1')
                                    Đang giao
                                    @elseif($cart->order_status == '2')
                                    Đã giao
                                    @else
                                    Đã hủy
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('orderProductList', ['id' => $cart->id]) }}"><i class="dw dw-edit2"></i>Chi tiết đơn hàng</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div style="justify-content: center;">

                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
@endsection

<!-- ->appends($request->all()) -->