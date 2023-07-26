<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Đăng nhập</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('dn.css') }}">
</head>

<body>
    <div class="container">
        <form action="{{route('Login')}}" method="post">
        @csrf
            <div class="top">
                <p>đăng nhập</p>
            </div>

            <div class="middle">
                <div class="tk">
                    <input type="email" onkeyup="keyup()" class="form-control" name="email" placeholder="Usename">
                </div>
                <span class="error" id="error_email"></span>
                <div class="tk mk">
                    <input type="password" onkeyup="keyup()" class="form-control" name="password"
                        placeholder="Password">
                </div>
                <span class="error" id="error_password"></span>
            </div>

            <div class="bottom">
                <div class="remember">
                    <input type="checkbox">
                    <h5>Nhớ mật khẩu</h5>
                    <a href="{{route('password.link')}}">Quên mật khẩu</a>
                </div>
                <button type="submit" onclick="submitForm()" class="btn btn-register" name="sub">đăng nhập</button>
                        @if($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                <p>------Đăng nhập bằng cách khác-----</p>
                <div class="other">
                    <button><a href="">Google</a></button>
                    <button><a href="">Face book</a></button>
                </div>

                <h4>Bạn chưa có tài khoản? <a href="{{route('register')}}">Đăng ký</a></h4>
            </div>
        </form>
    </div>
<script type="text/javascript" src="{{ asset('dn.js') }}"></script>

</body>

</html>