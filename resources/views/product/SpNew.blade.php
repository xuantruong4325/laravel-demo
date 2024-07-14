<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laptop Việt Nam</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/Home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('cssFe/boostrap.min.css') }}">
</head>

<body id="topqw">
    <div class="containerT headerT">
        <div class="logo">
            <a href="{{  route('home')  }}" style="text-decoration: none;">
                <h2 style="margin: 29px 0px 29px 10px;">
                    laptop.vn
                </h2>
            </a>
        </div>
        <div>
            <form id="form_search" action="{{ route('product') }}" role="get">
                <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword" value="">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div style="margin-right: 10px; margin-top: 13px;">
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
                            <a href="">Đơn hàng của tôi</a>
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
    <div class="containerT">
        @foreach ($editfooters as $editfooter)
        <marquee scrollamount="10" style="padding: 0px;">
            {{ $editfooter->name }}
        </marquee>
        @endforeach
    </div>
    <nav style="background-color: #eeecec;">
        <div class="containerT">
            <ul class="menu">
                <li><a style="padding: 13px 40px;" href="{{  route('home')  }}">trang chủ</a></li>
                <li><a style="padding: 13px 40px;" href="{{  route('product')  }}">sản phẩm</a></li>
                <li><a style="padding: 13px 40px;" href="{{  route('list-khuyenmai')  }}">khuyến mại</a></li>
                <li><a style="padding: 13px 40px;" href="{{  route('gioithieu')  }}">Giới thiệu</a></li>
                <li><a style="padding: 13px 40px;" href="">Tin tức</a></li>
                <li><a style="padding: 13px 40px;" href="">Liên hệ</a></li>

            </ul>
        </div>
    </nav>
    <main>
        @foreach ($editfooters as $editfooter)
        <div class="sile" style="margin-top: -10px;">
            <div class="left">
                <a href="">
                    <img src="/FileImage/Layout/{{ $editfooter->file_footer_left }}">
                </a>
            </div>
            <div class="between">
                <div class="slider_left">
                    <div class="slider_1">
                        <img src="/FileImage/Layout/{{ $editfooter->file_banner1 }}" width="100%">
                    </div>
                    <div class="slider_2">
                        <img src="/FileImage/Layout/{{ $editfooter->file_banner2 }}" width="100%">
                    </div>
                    <div class="slider_3">
                        <img src="/FileImage/Layout/{{ $editfooter->file_banner3 }}" width="100%">
                    </div>
                    <div class="slider_4">
                        <img src="/FileImage/Layout/{{ $editfooter->file_banner4 }}" width="100%">
                    </div>
                </div>
                <div class="container2">
                    <div class="sp">
                        <div>
                            <hr class="hr_left hr_dssp">
                            <hr class="hr_right hr_dssp">
                            <h1>Danh Sách Sản Phẩm</h1>
                        </div>
                        <div class="dssp">
                            <div class="conten_sp">
                                @foreach($productsNew as $product)
                                @if($product->status == 'Publish' || $product->status == 'Draft')
                                <div class="product sp_product">
                                    @if($product->discount != null)
                                    <div class="discount">
                                        <span id="discount">-{{ $product->discount }}%</span>
                                    </div>
                                    @endif
                                    <div class="info">
                                        <a class="img_product" href="{{ route('ttsp', ['id' => $product->id]) }}">
                                            <img src="/image/{{ $product->file }}" >
                                        </a>
                                        <div>
                                            <h3 class="sp_h3" style="font-weight: 600;">
                                                <a href="{{ route('ttsp', ['id' => $product->id]) }}">{{ $product->content }}</a>
                                            </h3>
                                            <div class="a">
                                                @if($product->price_after_discount != null)
                                                {{ number_format($product->price_after_discount, 0, '.', '.') }} đ
                                                <span class="span">{{ number_format($product->old_price, 0, '.', '.') }} đ</span>
                                                @else
                                                {{ number_format($product->old_price, 0, '.', '.') }} đ
                                                @endif
                                                <br>
                                                @if($product->status == 'Publish')
                                                @if(auth()->user() != null)
                                                <span id="span">
                                                    Còn hàng
                                                    <a onclick="addToCart('{{ $product->id }}',1,'{{ $product->content }}')"><i class="fa-solid fa-cart-shopping iconCart"></i></a>
                                                    <div class="tick" style="margin-top: -17px;"></div>
                                                </span>
                                                @else
                                                <span id="span">
                                                    Còn hàng
                                                    <a onclick="alert('Xin vui lòng đăng nhập')" href="{{route('Login')}}"><i class="fa-solid fa-cart-shopping iconCart"></i></a>
                                                    <div class="tick" style="margin-top: -17px;"></div>
                                                </span>
                                                @endif
                                                @elseif($product->status == 'Draft')
                                                <span id="spanH">
                                                    <i class="fa-solid fa-phone icon-phone"></i>
                                                    Đặt hàng
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <!-- <div style="justify-content: center;">
                          
                        </div> -->
                            <div id="sp_dau">
                                <div class="sp_dau">
                                    {!! $productsNew->links() !!}
                                </div>
                            </div>
                        </div>
                        <!-- <button id="but" type="button">Xem Thêm</button> -->
                    </div>
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

    <!-- Latest compiled JavaScript -->
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('jsFe/boostrap.min.js') }}">
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