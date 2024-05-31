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
                            <span>{{Auth::user()->name}}</span>
                        </div>
                    </div>
                    <div class="tkct-list">
                        <li class=""><a href="{{ route('tttk', ['id' => Auth::user()->id ])  }}">
                                <i class="fa-solid fa-user"></i>
                                Thông tin tài khoản</a>
                        </li>
                        <li><a href="#">
                                <i class="fa-solid fa-bars"></i>
                                Đơn hàng của tôi</a>
                        </li>
                        <li><a href="{{route('dmk')}}">
                                <i class="fa-solid fa-lock"></i>
                                Đổi mật khẩu
                            </a></li>
                        <li><a href="{{route('logout')}}">
                                <i class="fa-solid fa-power-off"></i>
                                Đăng xuất
                            </a></li>
                    </div>
                </div>
                
                @yield('userLayout')


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