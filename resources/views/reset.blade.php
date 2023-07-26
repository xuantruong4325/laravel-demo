<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dang Ky</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('dn.css') }}">
</head>
<body>
<div class="container">
    <form action="{{route('password.link')}}" method="post">
        @csrf
        <div class="top">
                <p>Quên mật khẩu</p>
            </div>

            <div class="middle">
                <div class="tk mk">
                    <input type="email" onkeyup="keyup()" class="form-control" name="email"
                        placeholder="Email">
                </div>
                        @if($errors->has('Email'))
                        <span class="error">{{ $errors->first('Email') }}</span>
                        @endif
            </div>

            <div class="bottom">
                <button type="submit" onclick="submitForm()" name="sub" class="btn btn-register">Xác nhận</button>
            </div>
    </form>
</div>
<script type="text/javascript" src="{{ asset('dk.js') }}"></script>

</body>
</html>