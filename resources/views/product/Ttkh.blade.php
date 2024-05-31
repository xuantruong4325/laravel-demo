@extends('layout/layoutUser')
@section('userLayout')
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
            <select id="tinh" name="quanId">
                <option value="">Tỉnh/Thành phố</option>
                @foreach($conscious as $consciou)
                <option value="{{ $consciou->code_consciouse }}">{{ $consciou->consciouse }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-box">
            <label for="huyen">Quận/huyện</label>
            <select id="huyen">
                <option value="">Phường/xã</option>
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
@endsection