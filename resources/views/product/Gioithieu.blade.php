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
            <div class="bw-gt-ctn">
                <h1 class="title-gt">Giới thiệu về Laptop.vn</h1>
                <div class="gt box-1">
                    @foreach ($introduces as $introduce)
                    {!! $introduce->general_info !!}
                    @endforeach
                </div>
                <div class="gt box-2">
                    @foreach ($introduces as $introduce)
                    {!! $introduce->aditional_info !!}
                    @endforeach
                </div>
            </div>
            <div class="betwen-bottom">
                <h1>ĐĂNG KÝ NHẬN EMAIL THÔNG BÁO KHUYẾN MẠI HOẶC ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ</h1>
                <form>
                    <input type="text" placeholder="Nhập email hoặc số điện thoại của bạn">
                    <button>Gửi</button>
                </form>
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