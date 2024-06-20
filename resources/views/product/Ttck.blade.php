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
            <h1>Thanh Toán</h1>
            <div class="tt-ctn">
                <form action="{{ route('pay') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div style="display: flex; gap: 20px;">
                        <div class="tt-box-1">
                            <h2>Sản phẩm</h2>
                            <div class="scroll">
                                @foreach($carts as $cart)
                                <div class="sptt">
                                    <!-- <input type="checkbox" class="checkbox-select"> -->
                                    <img src="/image/{{ $cart->avatar }}" alt="">
                                    <div class="sptt-content">
                                        <p>{{ $cart->name }}</p>
                                        <div class="sl">
                                            <label for="Sl">Số Lượng :</label>
                                            <label for="Sl">{{ $cart->quantity }}</label>
                                        </div>
                                    </div>
                                    <div class="giatien">
                                        <!-- <i class="fa-solid fa-trash"></i> -->
                                        @if($cart->new_price != 0)
                                        <h3 class="giaphaitra"> {{ number_format($cart->new_price, 0, '.', '.') }} đ</h3>
                                        <span class="giagoc">{{ number_format($cart->price, 0, '.', '.') }} đ</span>
                                        @else
                                        <h3 class="giaphaitra"> {{ number_format($cart->price, 0, '.', '.') }} đ</h3>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex-content">
                            <div class="tt-box-2">
                                <h2>Địa chỉ giao hàng</h2>

                                <div class="form-box">
                                    <label for="name">Họ tên</label>
                                    <input id="name" name="nameUser" type="text" value="{{Auth::user()->name}}">
                                </div>

                                <div class="form-box">
                                    <label for="sdt">Số điện thoại</label>
                                    <input id="sdt" name="phoneUser" type="text" value="{{Auth::user()->phone}}">
                                </div>

                                <div class="form-box">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" value="{{Auth::user()->email}}">
                                </div>

                                <div class="form-box">
                                    <label for="tinh">Tỉnh/Thành Phố</label>
                                    <select id="tinh" name="idTinh">
                                        <option value="">Tỉnh/Thành phố</option>
                                        @foreach($conscious as $consciou)
                                        <option value="{{ $consciou->code_consciouse }}" {{ $consciou->code_consciouse === Auth::user()->conscious ? 'selected' : '' }}>{{ $consciou->consciouse }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-box">
                                    <label for="huyen">Quận/huyện</label>
                                    <select id="huyen" name="idHuyen">
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
                                    <select id="xa" name="idXa">
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
                                    <input id="diachi" name="address" type="text" value="{{Auth::user()->address}}">
                                </div>

                            </div>

                            <div class="tt-box-3">
                                <h2>Chọn hình thức thanh toán</h2>
                                <div class="checked">
                                    <input id="khinhanhang" type="radio" value="0" name="giaohang" checked>
                                    <label for="khinhanhang">Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="checked">
                                    <input id="chuyenkhoan" type="radio" value="1" name="giaohang">
                                    <label for="chuyenkhoan">Thanh toán chuyển khoản</label>
                                </div>
                                <div class="checked">
                                    <input id="qr" type="radio" value="2" name="giaohang">
                                    <label for="qr">Thanh toán mã qr</label>
                                </div>
                                <div class="focus-chuyenkhooan">
                                    <div class="form-box">
                                        <label for="xa">Ngân hàng</label>
                                        <label class="ttck_nh">{{ $bank->nameBank }}</label>
                                    </div>
                                    <div class="form-box">
                                        <label for="xa">Tên chủ tài khoản</label>
                                        <label class="ttck_nh">{{ $bank->name }}</label>
                                    </div>
                                    <div class="form-box">
                                        <label for="xa">Số tài khoản</label>
                                        <label class="ttck_nh"> {{ $bank->account_number }}</label>
                                    </div>
                                </div>
                                <div class="focus-qr">
                                    <img src="/code_qr/{{ $bank->code_qr }}" alt="" class="qr">
                                    <!-- <div class="qr"> </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr class="space">
                    <div class="btn-control">
                        <p class="tt-thanhtoan">Tổng tiền : <span>{{ number_format($priceCart, 0, '.', '.') }} đ</span> </p>
                        <button>Quay lại mua thêm</button>
                        <button type="submit" onclick="alert('Bạn đã đặt hàng thành công')">Đặt hàng</button>
                    </div>
                </form>
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
<script>
    const chuyenkhoan = document.getElementById("chuyenkhoan");
    const qr = document.getElementById("qr");
    const khinhanhang = document.getElementById("khinhanhang");
    const focusChuyenkhoan = document.querySelector(".focus-chuyenkhooan");
    const focusQr = document.querySelector(".focus-qr");


    function updateDisplay() {
        focusChuyenkhoan.classList.remove('show');
        focusQr.classList.remove('show');
        if (chuyenkhoan.checked) {
            focusChuyenkhoan.classList.add("show");
        } else if (qr.checked) {
            focusQr.classList.add("show");
        }
    }

    chuyenkhoan.addEventListener('change', updateDisplay);
    qr.addEventListener('change', updateDisplay);
    khinhanhang.addEventListener('change', updateDisplay);

    updateDisplay();
</script>
@endsection