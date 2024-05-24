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
            <div class="content-tkct">
                <div class="tkct-left">
                    <div class="tkct-user">
                        <i class="fa-solid fa-user"></i>
                        <div>
                            <p>Tài khoản của</p>
                            <span>Duy Thành</span>
                        </div>
                    </div>
                    <div class="tkct-list">
                        <li class="active"><a href="tkct.html">
                                <i class="fa-solid fa-user"></i>
                                Thông tin tài khoản</a>
                        </li>
                        <li><a href="#">
                                <i class="fa-solid fa-bars"></i>
                                Đơn hàng của tôi</a>
                        </li>
                        <li><a href="#">
                                <i class="fa-solid fa-lock"></i>
                                Đổi mật khẩu
                            </a></li>
                        <li><a href="{{route('logout')}}">
                                <i class="fa-solid fa-power-off"></i>
                                Đăng xuất
                            </a></li>
                    </div>
                </div>
                <div class="tkct-right">
                    <h2>Thông tin tài khoản</h2>
                    <hr>
                    <form class="tkct-form">
                        <div class="form-box">
                            <label for="name">Họ tên</label>
                            <input id="name" type="text" placeholder="Họ và tên" value="{{Auth::user()->name}}">
                        </div>

                        <div class="form-box">
                            <label for="sdt">Số điện thoại</label>
                            <input id="sdt" type="text" placeholder="Nhập số điện thoại" value="{{Auth::user()->phone}}">
                        </div>

                        <div class="form-box">
                            <label for="email">Email</label>
                            <input id="email" type="text" placeholder="Nhập Email" value="{{Auth::user()->email}}">
                        </div>

                        <div class="form-box">
                            <label for="tinh">Tỉnh/Thành Phố</label>
                            <select id="tinh">
                                <option value="">Tỉnh/Thành phố</option>
                            </select>
                        </div>

                        <div class="form-box">
                            <label for="huyen">Quận/huyện</label>
                            <select id="huyen">
                                <option value="">Quận/huyện</option>
                            </select>
                        </div>

                        <div class="form-box">
                            <label for="xa">Phường/xã</label>
                            <select id="xa">
                                <option value="">Phường/xã</option>
                            </select>
                        </div>

                        <div class="form-box">
                            <label for="diachi">Địa chỉ</label>
                            <input id="diachi" type="text" placeholder="Số nhà, tên đường" value="{{Auth::user()->address}}">
                        </div>
                    </form>
                    <button class="btn-edit">
                        <i class="fa-solid fa-user-pen"></i>
                        Chỉnh sửa thông tin
                    </button>
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