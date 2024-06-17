@extends('layout/header')
@section('home')
<main>
    @foreach ($editfooters as $editfooter)
    <div class="sile">
        <div class="left">
            <a href="">
                <img src="/FileImage/Layout/{{ $editfooter->file_footer_left }}">
            </a>
        </div>
        <div class="between">
            <div class="slider_left">
                <div class="slider_1">
                    <img src="/FileImage/Layout/{{ $editfooter->file_cart }}" width="100%">
                </div>
            </div>
            <div class="container1">
                <div class="gio_hang">
                    giỏ hàng
                </div>

                <table width="100%">
                    <tr>
                        <th class="gio_sp">
                            Sản phẩm
                        </th>
                        <th class="gio_tsp">
                            Tên sản phẩm
                        </th>
                        <th class="gio_sl">
                            Số lượng
                        </th>
                        <th class="gio_gt">
                            Giá tiền
                        </th>
                        <th class="gio_gt">
                            Tổng
                        </th>
                        <th class="gio_xoa">
                            Xóa
                        </th>
                    </tr>
                    @foreach($carts as $cart)
                    <tr>
                        <td class="gio_sp">
                            <a href="ttsp.html"><img src="/image/{{ $cart->avatar }}" width="100px" header="100px"></a>
                        </td>
                        <td class="gio_tsp">
                            <a href="ttsp.html">{{ $cart->name }} </a>
                        </td>
                        <td class="gio_sl">
                            <div class="input_sl">{{ $cart->quantity }}</div>
                        </td>
                        <td class="gio_gt">
                            {{ number_format($cart->price, 0, '.', '.') }} đ
                        </td>
                        <td class="gio_gtt">
                            {{ number_format($cart->quantity*$cart->price, 0, '.', '.') }} đ
                        </td>
                        <td class="gio_xoa">
                            <button type="button"><a href="" onclick="deleteCart('{{ $cart->id }}',1,'{{ $cart->name }}')"><i class="fa-solid fa-trash-can"></i></a></button>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3">
                            <label class="gio_label">Tổng tiền</label>
                        </td>
                        <td colspan="2" id="gio_all">
                            {{ number_format($priceCart, 0, '.', '.') }} đ
                        </td>
                    </tr>
                </table>
                <div style="margin: 50px 0 0; text-align: center;">
                    <button type="button" class="cart-pay"><a>Thanh toán</a></button>
                    <button type="reset" class="clear-cart" onclick="deleteAllCart('{{ Auth::user()->id }}')">Xóa giỏ hàng</button>
                </div>
            </div>
        </div>
        <div class="right">
            <a href="">
                <img src="/FileImage/Layout/{{ $editfooter->file_footer_right }}">
            </a>

        </div>

    </div>
    @endforeach
</main>
@endsection