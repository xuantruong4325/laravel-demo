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
            @if($check == null)
            <div class="container1">
                <div class="no-cart">
                    <img src="image/no-cart.png" alt="">
                    <button><a href="{{ route('home') }}">Mua ngay</a></button>
                </div>
            </div>
            @else
            <div class="container1">
                <div class="gio_hang">
                    giỏ hàng
                </div>

                <table width="100%" style="border: 1px solid #bdbdbd88;">
                    <tr>
                        <th class="gio_sp" style="border: 1px solid #bdbdbd88;">
                            Sản phẩm
                        </th>
                        <th class="gio_tsp" style="border: 1px solid #bdbdbd88;">
                            Tên sản phẩm
                        </th>
                        <th class="gio_sl" style="border: 1px solid #bdbdbd88;">

                            Số lượng
                        </th>
                        <th class="gio_gt" style="border: 1px solid #bdbdbd88;">
                            Giá tiền
                        </th>
                        <th class="gio_gt" style="border: 1px solid #bdbdbd88;">
                            Tổng
                        </th>
                        <th class="gio_xoa" style="border: 1px solid #bdbdbd88;">
                            Xóa
                        </th>
                    </tr>
                    @foreach($carts as $cart)
                    <tr>
                        <td class="gio_sp" style="border: 1px solid #bdbdbd88;">
                            <a href="{{ route('ttsp', ['id' => $cart->id_product]) }}"><img src="/image/{{ $cart->avatar }}" width="100px" header="100px"></a>
                        </td>
                        <td class="gio_tsp" style="border: 1px solid #bdbdbd88;">
                            <a href="{{ route('ttsp', ['id' => $cart->id_product]) }}">{{ $cart->name }} </a>
                        </td>
                        <td class="gio_sl" style="border: 1px solid #bdbdbd88;">
                            <!-- <div class="input_sl">{{ $cart->quantity }}</div> -->
                            <input type="text" value="{{ $cart->quantity }}" id="input1" data-price="290000" class="input_sl">
                            <input style="margin: 0; width: 0px; height: 0px; border: 0px;" value="{{ $cart->id }}" id="cartId">
                        </td>
                        @if($cart->new_price != 0)
                        <td class="gio_gt" style="border: 1px solid #bdbdbd88;">
                            {{ number_format($cart->new_price, 0, '.', '.') }} đ
                        </td>
                        <td class="gio_gtt" style="border: 1px solid #bdbdbd88;">
                            {{ number_format($cart->quantity*$cart->new_price, 0, '.', '.') }} đ
                        </td>
                        @else
                        <td class="gio_gt" style="border: 1px solid #bdbdbd88;">
                            {{ number_format($cart->price, 0, '.', '.') }} đ
                        </td>
                        <td class="gio_gtt" style="border: 1px solid #bdbdbd88;">
                            {{ number_format($cart->quantity*$cart->price, 0, '.', '.') }} đ
                        </td>
                        @endif
                        <td class="gio_xoa" style="border: 1px solid #bdbdbd88;">
                            <button type="button"><a href="" onclick="deleteCart('{{ $cart->id }}',1,'{{ $cart->name }}')"><i class="fa-solid fa-trash-can"></i></a></button>
                        </td>
                    </tr>
                    @endforeach
                    <tr style="border: 1px solid #bdbdbd88;">
                        <td colspan="3" style="border: 1px solid #bdbdbd88;">
                            <label class="gio_label">Tổng tiền</label>
                        </td>
                        <td colspan="2" id="gio_all" style="border: 1px solid #bdbdbd88;">
                            {{ number_format($priceCart, 0, '.', '.') }} đ
                        </td>
                    </tr>
                </table>
                <div style="margin: 50px 0 0; text-align: center;">
                    <button type="button" class="cart-pay"><a href="{{ route('cart-checkout') }}">Thanh toán</a></button>
                    <button type="reset" class="clear-cart" onclick="deleteAllCart('{{ Auth::user()->id }}')">Xóa giỏ hàng</button>
                </div>
            </div>
            @endif

        </div>
        <div class="right">
            <a href="">
                <img src="/FileImage/Layout/{{ $editfooter->file_footer_right }}">
            </a>

        </div>

    </div>
    @if(session('error'))
    <script>
        alert("Số lượng mua quá lớn");
    </script>
    @endif
    @if(session('error2'))
    <script>
        alert("Sửa số lượng thành công");
    </script>
    @endif
    @endforeach
</main>
<!-- <script type="text/javascript">
    $('#input1').on('change', function() {
        var id = $("#input1").val();
        var id2 = $("#cartId").val();
        if (id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "",
                type: "POST",
                data: {
                    'code': id,
                    'idCart': id2
                },
            });
        }
    });
</script> -->
@endsection