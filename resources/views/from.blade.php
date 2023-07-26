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
    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="top">
                <p>đăng ký</p>
            </div>

            <div class="middle">
                <div class="tk">
                    <input type="text" onkeyup="keyup()" class="form-control" name="Name" placeholder="Usename">
                </div>
                <span class="error" id="error_fullname"></span>
                <div class="tk mk">
                    <input type="email" onkeyup="keyup()" class="form-control" name="Email"
                        placeholder="Email">
                </div>
                        @if($errors->has('Email'))
                        <span class="error">{{ $errors->first('Email') }}</span>
                        @endif
                <span class="error" id="error_email"></span>
                <div class="tk mk">
                    <input type="password" onkeyup="keyup()" class="form-control" name="Password"
                        placeholder="Password">
                </div>
                <span class="error" id="error_password"></span>
            </div>

            <div class="bottom">
                <button type="submit" onclick="submitForm()" name="sub" class="btn btn-register">đăng ký</button>


                <p>------Đăng ký bằng cách khác-----</p>
                <div class="other">
                    <button><a href="">Google</a></button>
                    <button><a href="">Face book</a></button>
                </div>

                <h4>Bạn đã có tài khoản? <a href="{{route('Login')}}">Đăng nhập</a></h4>
            </div>
    </form>
</div>
<script type="text/javascript" src="{{ asset('dk.js') }}"></script>

</body>
</html>