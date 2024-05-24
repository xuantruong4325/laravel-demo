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
            <div class="km-2-content">
                <h1 class="title-km-2">{{ $promotions->title }}</h1>
                <p class="time-up-sale">Đăng bởi <a href="{{  route('home')  }}">LAPTOP.VN</a></p>
                <p class="title-ul">{{  $promotions->timeApplication  }}</p>
                <p class="tt-km">
                    {!!  $promotions->content  !!}
                </p>
                <hr>
                <h2>Trả Lời</h2>
                <p>Email của bạn sẽ không được hiển thị công khai. Các trường bắt buộc được đánh dấu *</p>

                <h3>Bình luận</h3>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <label class="lb-name" for="name">Tên *</label>
                <input id="name" class="input-box name" type="text">
                <div>
                    <div class="input-box-left">
                        <label for="email">Email *</label>
                        <input type="email" id="email" class="input-box email">
                    </div>
                    <div class="input-box-right">
                        <label for="Web">Trang web</label>
                        <input type="text" id="Web" class="input-box web">
                    </div>
                </div>
                <button type="button">Phản hồi</button>
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