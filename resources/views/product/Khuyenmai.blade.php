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
            <h1 class="title-ct-km">Khuyến mại</h1>
            <div class="betwen-content">
                <!-- box-1 -->
                @foreach ($promotions as $promotion)
                <div class="content-box">
                    <a href="{{  route('khuyen-mai', ['id' => $promotion -> id ])  }}">
                        <div class="content-box-img">
                            <img src="/FileImage/promotion/{{ $promotion->avatar }}" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="content-box-text">
                            {{  $promotion->title  }}
                        </div>
                        <div class="content-box-time">
                            {{  $promotion->timeApplication  }}
                        </div>
                    </a>
                </div>
                @endforeach
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