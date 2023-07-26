<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Thong tin nguoi dung</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('dn.css') }}">
</head>
<body>
<div class="container">
<form action="{{ route('Update', ['id' => $user->id]) }}" method="POST">
    @csrf
    <div class="top">
        <p>sửa thông tin người dùng</p>
    </div>
    <div class="middle">
        <div class="tk">
            <input type="text" class="form-control" name="Name" placeholder="Username" value="{{ $user->Name }}">
        </div>
        <span class="error" id="error_fullname"></span>
        <div class="tk mk">
            <input type="email" class="form-control" name="Email" placeholder="Email" value="{{ $user->Email }}">
        </div>
        @if($errors->has('Email'))
            <span class="error">{{ $errors->first('Email') }}</span>
        @endif
        <span class="error" id="error_email"></span>
        <div class="tk mk">
            <input type="password" class="form-control" name="Password" placeholder="Password">
        </div>
        <span class="error" id="error_password"></span>
    </div>
    <div class="bottom">
        <button type="submit" name="sub" class="btn btn-register">Hoàn thành</button>
    </div>
</form>

</div>
<!-- <script type="text/javascript" src="{{ asset('dk.js') }}"></script> -->

</body>
</html>