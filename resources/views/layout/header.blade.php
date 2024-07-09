<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laptop Việt Nam</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/Home.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/km.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/gioithieu.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/tkct.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/ttkh.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/cxn.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/chitiet.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body id="topqw">
    <div class="container header">
        <div class="logo">
            <h2>
                laptop.vn
            </h2>
        </div>
        <div>
            <form id="form_search" action="{{ route('product') }}" role="get">
                <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div style="margin-right: 10px; margin-top: -5px;">
            @if(auth()->user() != null)
            <ul class="btn-user" style="width: 220px;">
                <li>
                    <i class="fa-solid fa-circle-user icon-users"></i>
                    <label style="margin-top: -10px;" class="btn-user-name">Xin chào, {!! substr(Auth::user()->name,0,15) !!}...</label>
                    <ul class="user-menu" style="width: 180px;">
                        <li>
                            <a href="{{ route('tttk', ['id' => Auth::user()->id ])  }} ">Tài khoản của tôi</a>
                        </li>
                        <li>
                            <a href="{{ route('orderAll')  }}">Đơn hàng của tôi</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}">Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="btn-user">
                <li>
                    <i class="fa-solid fa-circle-user icon-users"></i>
                    <label style="margin-top: -10px;">Tài khoản</label>
                    <ul class="user-menu">
                        <li>
                            <a href="{{route('register')}}">Đăng ký</a>
                        </li>
                        <li>
                            <a href="{{route('Login')}}">Đăng nhập</a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
            @if(auth()->user() != null)
            <a class="cart" href="{{route('cart')}}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="number" id="cart"></span>
            </a>
            @else
            <a class="cart" href="{{route('cart')}}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="number">0</span>
            </a>
            @endif  
        </div>
    </div>
    <div class="container">
        @foreach ($editfooters as $editfooter)
        <marquee scrollamount="10">
            {{ $editfooter->name }}
        </marquee>
        @endforeach
    </div>
    <nav style="background-color: #eeecec;">
        <div class="container">
            <ul class="menu">
                <li><a href="{{  route('home')  }}">trang chủ</a></li>
                <li><a href="{{  route('product')  }}">sản phẩm</a></li>
                <li><a href="{{  route('list-khuyenmai')  }}">khuyến mại</a></li>
                <li><a href="{{  route('gioithieu')  }}">Giới thiệu</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Liên hệ</a></li>

            </ul>
        </div>
    </nav>
    @yield('home')

    <footer>
        <div class="container">
            <div class="footer">
                <div class="footer-con">
                    Thông tin chung
                    <div>
                        <a href="">Giới thiệu Laptop.VN</a><br>
                        <a href="">Tin tức</a><br>
                        <a href="">Tuyển dụng</a><br>
                        <a href="">Thông tin hợp tác </a>
                    </div>
                </div>
                <div class="footer-con">
                    Chính sách
                    <div>
                        <a href="">Trả góp</a><br>
                        <a href="">Giao hàng</a><br>
                        <a href="">Bảo hành</a><br>
                        <a href="">Đổi trả</a><br>
                        <a href="">Bảo mật thông tin</a>
                    </div>
                </div>
                <div class="footer-con">
                    Liên hệ & Địa chỉ
                    <div>
                        Hotline: 0369749610<br>
                        Email: laptopVN@gmail.com<br>
                        Đia chỉ: 75 Giải phóng Hai Bà Trưng Hà Nội
                    </div>
                </div>
                <div class="footer-con">
                    <a href="facebook.com"><i class="fa-brands fa-facebook"></i><br></a>
                    <a href=""><i class="fa-brands fa-youtube"></i><br></a>
                    <a href=""><i class="fa-brands fa-instagram"></i><br></a>
                    <a href=""><i class="fa-brands fa-facebook-messenger"></i></a>
                </div>
            </div>
        </div>
        <a id="scroll_top" href="#topqw"><i class="fa-solid fa-chevron-up"></i></a>
    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/card.js"></script>
    <script>
        
        //cart	
        addToCart = function(_productId, _quantity, _name) {

            alert("Thêm " + _quantity + " sản phẩm " + _name + " vào giỏ hàng ");

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('cartAdd') }}",
                type: "POST",
                data: {
                    'productId': _productId,
                    'quantity': _quantity,
                },
                success: function(response) {
                    // Xử lý sau khi sản phẩm được thêm thành công vào giỏ hàng
                    location.reload(); // Tải lại trang
                },
            });
        }

        deleteCart = function(_productDeleteId, _quantity, _name) {

            alert("Xóa sản phẩm " + _name + " Thành công ");

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('cartDelete') }}",
                type: "POST",
                data: {
                    'productDelete': _productDeleteId,
                },
                success: function(response) {
                    // Xử lý sau khi sản phẩm được thêm thành công vào giỏ hàng
                    location.reload(); // Tải lại trang
                },
            });
        }

        deleteAllCart = function(_productDeleteAll,) {

            alert("Xóa giỏ hàng thành công ");

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('cartDeleteAll') }}",
                type: "POST",
                data: {
                    'productDeleteAll': _productDeleteAll,
                },
                success: function(response) {
                    // Xử lý sau khi sản phẩm được thêm thành công vào giỏ hàng
                    location.reload(); // Tải lại trang
                },
            });
        }

        cartCan = function(_idOrder) {

            alert("Hủy đơn hàng thành công");

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('cartCancel') }}",
                type: "POST",
                data: {
                    'idOrder': _idOrder,
                },
                success: function(response) {
                    // Xử lý sau khi sản phẩm được thêm thành công vào giỏ hàng
                    location.reload(); // Tải lại trang
                },
            });
        }

        $(document).ready(function() {
            $('#tinh').on('change', function() {
                var id = $(this).val();
                $("#huyen").empty();
                $("#xa").empty();
                if (id) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('ajax-huyen') }}",
                        type: "POST",
                        data: {
                            'code': id,
                        },
                        success: function(data) {
                            console.log(data);
                            var option = [];
                            $.each(data, function(i, district) {
                                option.push(`<option value="${ district.id}">${district.name}</option>`);
                            });
                            $("#huyen").append(option);
                        },
                    });
                } else {
                    $("#huyen").empty();
                }
            });

        });

        $(document).ready(function() {
            $('#huyen').on('change', function() {
                var id = $(this).val();
                $("#xa").empty();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('ajax-xa') }}",
                    type: "POST",
                    data: {
                        'code': id,
                    },
                    success: function(datas) {
                        console.log(datas);
                        var option = [];
                        $.each(datas, function(i, commune) {
                            option.push(`<option value="${ commune.id}">${commune.name}</option>`);
                        });
                        $("#xa").append(option);
                    },
                });
            });

        });


        $(document).ready(function() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('ajax-sp') }}",
                type: "POST",
                data: {},
                success: function(dataCart) {
                    console.log(dataCart);
                    $("#cart").html(dataCart);
                },
            });

        });

        function tb() {
            let x = document.getElementById('newPass').value;
            let y = document.getElementById('passNew').value;
            if (!isNaN(x) && !isNaN(y) && x == y) {
                alert("Đổi mật khẩu thành công");
            }
        }

        function goToSp() {
            window.location = '{{ route('product') }}';
        }

        $('.slider_left').slick({
            // dots: true,
            // centerMode: true,
            // variableWidth: true,
            slidesShowTo: 1,
            // Infinity:true,
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            speed: 100,
            prevArrow: '<button type="button" class="slick-arrow slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-arrow slick-next"><i class="fa-solid fa-chevron-right"></i></button>'
        });
        $('.gfgfgf').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<button type="button" class="slick-arrow slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-arrow slick-next"><i class="fa-solid fa-chevron-right"></i></button>'
        });
    </script>
</body>

</html>