@extends('layout/layoutUser')
@section('userLayout')
<div class="tkct-right">
    <h2>Đổi mật khẩu</h2>
    <hr>
    <form action="{{ route('dmkSave') }}" method="POST" class="tkct-form">
        @csrf
        <div class="form-box">
            <label for="name">Mật khẩu hiện tại</label>
            <input id="name" type="password" placeholder="Nhập mật khẩu hiện tại" name="pass" minlength="3" required>
        </div>

        <div class="form-box">
            <label for="sdt">Mật khẩu mới</label>
            <input id="sdt" type="password" placeholder="Nhập mật khẩu mới" name="newPass" id="newPass" minlength="6" required >
        </div>

        <div class="form-box">
            <label for="email">Nhập lại mật khẩu</label>
            <input id="email" type="password" placeholder="Nhập lại mật khẩu mới" name="passNew" minlength="6" required>
        </div>
        @if($errors->has('passs'))
        <span class="error" style="color: red;">{{ $errors->first('passs') }}</span>
        @elseif($errors->has('psasss'))
        <span class="error" style="color: red;">{{ $errors->first('psasss') }}</span>
        @elseif($errors->has('tbpass'))
        <script>
            document.addEventListener('DOMContentLoaded', function(e) {
                e.preventDefault();
                alert("Đổi mật khẩu thành công");
            });
        </script>
        @endif
        <button class="btn-edit">
            <i class="fa-solid fa-user-pen"></i>
            Đổi mật khẩu
        </button>
    </form>

</div>
@endsection