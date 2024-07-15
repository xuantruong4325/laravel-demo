@extends('layout/layoutUser')
@section('userLayout')
<div class="tkct-right">
    <h2>Thông tin tài khoản</h2>
    <hr>
    <form action="{{ route('editUserSave') }}" method="POST" class="tkct-form">
        @csrf
        <div class="form-box">
            <label for="name">Họ tên</label>
            <input id="name" name="name" type="text" placeholder="Họ và tên" value="{{Auth::user()->name}}" required>
        </div>

        <div class="form-box">
            <label for="sdt">Số điện thoại</label>
            <input id="sdt" name="phone" type="text" placeholder="Nhập số điện thoại" value="{{Auth::user()->phone}}" maxlength="10" minlength="10" require>
        </div>

        <div class="form-box">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Nhập Email" value="{{Auth::user()->email}}" required>
        </div>

        <div class="form-box">
            <label for="tinh">Tỉnh/Thành Phố</label>
            <select id="tinh" name="idTinh" required>
                <option value="">Tỉnh/Thành phố</option>
                @foreach($conscious as $consciou)
                <option value="{{ $consciou->code_consciouse }}" {{ $consciou->code_consciouse === Auth::user()->conscious ? 'selected' : '' }}>{{ $consciou->consciouse }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-box">
            <label for="huyen">Quận/huyện</label>
            <select id="huyen" name="idHuyen" required>
                @if($districts != null)
                @foreach($districts as $district)
                <option value="{{ $district->code_district }}" {{ $district->code_district === Auth::user()->district ? 'selected' : '' }}>{{ $district->district }}</option>
                @endforeach
                @else
                <option value="">Quận/huyện</option>
                @endif
            </select>
        </div>

        <div class="form-box">
            <label for="xa">Phường/xã</label>
            <select id="xa" name="idXa" required>
                @if($districts != null)
                @foreach($communes as $commune)
                <option value="{{ $commune->code_commune }}" {{ $commune->code_commune === Auth::user()->commune ? 'selected' : '' }}>{{ $commune->commune }}</option>
                @endforeach
                @else
                <option value="">Phường/xã</option>
                @endif
            </select>
        </div>

        <div class="form-box">
            <label for="diachi">Địa chỉ</label>
            <input id="diachi" type="text" placeholder="Số nhà, tên đường" name="address" value="{{Auth::user()->address}}" required >
        </div>

        @if($errors->has('Email'))
        <script>
            document.addEventListener('DOMContentLoaded', function(e) {
                e.preventDefault();
                alert("Email đã tồn tại");
            });
        </script>
        @elseif($errors->has('Phone'))
        <script>
            document.addEventListener('DOMContentLoaded', function(e) {
                e.preventDefault();
                alert("Số điện thoại đã tồn tại");
            });
        </script>
        @elseif($errors->has('tbEdituser'))
        <script>
            document.addEventListener('DOMContentLoaded', function(e) {
                e.preventDefault();
                alert("Sửa thông tin thành công");
            });
        </script>
        @endif

        <button class="btn-edit">
            <i class="fa-solid fa-user-pen"></i>
            Chỉnh sửa thông tin
        </button>
    </form>
</div>
@endsection