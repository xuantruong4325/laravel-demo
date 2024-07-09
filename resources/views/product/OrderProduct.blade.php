@extends('layout/layoutUser')
@section('userLayout')
<div class="tkct-right">
    <div class="form-chitiet">
        <h2 class="title-chitiet">Mã đơn hàng: <span>012345-999999</span></h2>
        <div class="box-chitiet-sx">
            <h3>Sắp xếp theo thứ tự</h3>
            <hr>
            <div style="display: flex; align-items: center;gap: 30px;padding: 0 20px;">
                <table class="tt-left">
                    <tr>
                        <th>Tên:</th>
                        <td>{{ $cart->nameUser }}</td>
                    </tr>
                    <tr>
                        <th>Số điện thoại:</th>
                        <td>{{ $cart->phoneUser }}</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ giao hàng:</th>
                        <td>{{ $cart->address }}</td>
                    </tr>
                    <tr>
                        <th>Trạng thái:</th>
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
                    </tr>
                </table>
                <table class="tt-right">
                    <tr>
                        <th>Số lượng:</th>
                        <td>{{ $cart->totalProduct }}</td>
                    </tr>
                    <tr>
                        <th>Tổng số tiền:</th>
                        <td>{{ number_format($cart->totalPrice, 0, '.', '.') }}vnđ</td>
                    </tr>
                    <tr>
                        <th>Ngày đặt hàng:</th>
                        <td>{{ $cart->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Phương thức thanh toán:</th>
                        <td>
                            @if($cart->payments == '0')
                            Thanh toán khi nhận hàng
                            @elseif($cart->payments == '1')
                            Chuyển khoản
                            @else
                            Thanh toán qua macx qr
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="box-chitiet-gop">
            <div class="box-chitiet-ct">
                <h3>Chi tiết đơn hàng</h3>
                <hr>
                <table class="ct-left">
                    <tr>
                        <th class="title-ct-id">#</th>
                        <th class="title-ct-ten">Tên sản phẩm</th>
                        <th class="title-ct-anh">Ảnh sản phẩm</th>
                        <th class="title-ct-sl">Số lượng</th>
                        <th class="title-ct-gb">Giá bán</th>
                    </tr>
                </table>
                <div class="scrollable-container">
                    <table class="ct-left">
                        @foreach($cartProducts as $key => $cartProduct)
                        <tr class="content-ct-box">
                            <td class="content-ct-id">{{ $key+1 }}</td>
                            <td class="content-ct-ten">{{ $cartProduct->nameProduct }}</td>
                            <td class="content-ct-anh">
                                <img src="/image/{{ $cartProduct->avatar }}" alt="">
                            </td>
                            <td class="content-ct-sl">{{ $cartProduct->quantity }}</td>
                            <td class="content-ct-gb">{{ number_format($cartProduct->price, 0, '.', '.') }} vnđ</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>

        <button class="btn-chitiet-back">
            <a href="{{ route('orderAll') }}">Quay lại</a>
        </button>
    </div>
</div>
@endsection