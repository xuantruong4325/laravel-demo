@extends('layout/layoutUser')
@section('userLayout')
<div class="tkct-right">
    <ul class="list-menu-donhang">
        <li><a href="donhang-all.html" class="all">Tất cả</a></li>
        <li><a href="donhang-cxn.html">Chờ xác nhận</a></li>
        <li><a href="donhang-danggiao.html">Đang giao</a></li>
        <li><a href="donhang-dagiao.html">Đã giao</a></li>
        <li><a href="donhang-dahuy.html">Đã hủy</a></li>
    </ul>

    <hr>
    <div class="box-cxn">
        @foreach($carts as $cart)
        <div class="box-cxn-sp">
            <img src="/images/sp1.jpg" alt="">
            <p class="box-cxn-tensp">Nguồn Corsair HX1500i </p>
            <p class="box-cxn-giatien">9.100.000 Vnđ</p>
            <p class="box-cxn-tt"><span>Chờ xác nhận</span></p>
            <p class="box-cxn-huy"><button>Hủy đơn hàng</button></p>
        </div>
        @endforeach
    </div>

</div>
@endsection