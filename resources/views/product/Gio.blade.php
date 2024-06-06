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
                        <tr>
                            <td class="gio_sp">
                                <a href="ttsp.html"><img src="images/0104_KM-Man-hinh-T4.png"></a>
                            </td>
                            <td class="gio_tsp">
                                <a href="ttsp.html">ASUS RT-N12+ Chuẩn N300, hỗ trợ tính năng lặp sóng </a>
                            </td>
                            <td class="gio_sl">
                                <button type="button" class="increase"><i class="fa-solid fa-minus"></i></button>
                                <input type="text" value="1" id="input1" data-price="290000" class="input_sl">
                                <button type="button" class="reduce"><i class="fa-solid fa-plus"></i></button>
                            </td>
                            <td class="gio_gt">
                                290,000đ
                            </td>
                            <td class="gio_gtt">
                                290,000đ
                            </td>
                            <td class="gio_xoa">
                                <button type="button"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <label class="gio_label">Tổng tiền</label>
                            </td>
                            <td colspan="2" id="gio_all">
                                121,350,000đ
                            </td>
                        </tr>
                    </table>
                    <div style="margin: 50px 0 0; text-align: center;">
                    <button type="button"><a href="ttkh.html">Thanh toán</a></button>
                    <button type="reset" class="clear-cart">Xóa giỏ hàng</button>
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