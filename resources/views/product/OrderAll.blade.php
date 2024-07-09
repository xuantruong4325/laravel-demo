@extends('layout/layoutUser')
@section('userLayout')
<div class="tkct-right">
    <table class="tb-trangthai">

        <thead>
            <tr>
                <td style="padding: 0; border: 0;">
                    <table class="tb-title">
                        <tr>
                            <th class="trangthai-kh">Ngày đặt</th>
                            <th class="trangthai-tsp">Tổng sản phẩm</th>
                            <th class="trangthai-tt">Tổng tiền</th>
                            <th class="trangthai-trt">Trạng thái</th>
                            <th class="trangthai-tc">Tùy chọn</th>
                        </tr>
                    </table>
                </td>
            </tr>
        </thead>
        <tbody>
            <td style="padding: 0;border: 0;">
                <div class="scroll-trangthai">
                    <table class="tb-thongtin">
                        @foreach($carts as $cart)
                        <tr class="item-thongtin">
                            <td class="cot-kh">{{ $cart->created_at }}</td>
                            <td class="cot-tsp">{{ $cart->totalProduct }}</td>
                            <td class="cot-tt">{{ number_format($cart->totalPrice, 0, '.', '.') }} vnđ</td>
                            <td class="cot-trt">
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
                            <td class="cot-tc">
                                <a href="{{ route('orderProduct', ['id' => $cart->id]) }}" title="Xem đơnn hàng" ><i class="fa-regular fa-eye"></i></a>
                                @if($cart->order_status == '0')
                                <a onclick="cartCan('{{ $cart->id }}')" title="Hủy đơn hàng" ><i class="fa-solid fa-ban" style="color: red;"></i></a>
                                <!-- <button title="Hủy đơn hàng" onclick="cartCancel('$cart->id')"><i class="fa-solid fa-ban"></i></button> -->
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </td>
        </tbody>
    </table>
</div>
@endsection