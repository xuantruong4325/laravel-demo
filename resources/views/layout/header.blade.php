<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ba cuoi khoa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('Home.css') }}">
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
            <form id="form_search" action="tim-kiem.html" method="get">
                <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div style="margin-right: 10px; margin-top: -5px;">
            <a class="btn-top btn-store" href="dn.html">
                Đăng nhập
            </a>
            <a class="btn-top btn-visit" href="dk.html">
                Đăng ký
            </a>
            <a class="cart" href="gio.html">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="number">0</span>
            </a>
        </div>
    </div>
    <div class="container">
        <marquee scrollamount="10">
            Chào mừng bạn đến với laptop VN. Chúc bạn một ngày mới vui vẻ...
        </marquee>
    </div>
    <nav>
        <div class="container">
            <ul class="menu">
                <li><a class="active" href="">trang chủ</a></li>
                <li><a href="sp.html">danh mục sản phẩm
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <ul class="sub_menu">
                        <li>
                            <a href="">Xây dựng cấu hình pc</a>
                        </li>
                        <li>
                            <a href="">laptop
                                <i class="fa-solid fa-chevron-right" style="float: right;"></i>
                            </a>
                            <ul class="sub_menu1">
                                <li>
                                    <a href="">laptop gaming</a>
                                </li>
                                <li>
                                    <a href="">laptop văn phòng</a>
                                </li>
                                <li>
                                    <a href="">laptop theo hãng
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub_menu2">
                                        <li>
                                            <a href="">laptop asus</a>
                                        </li>
                                        <li>
                                            <a href="">laptop dell</a>
                                        </li>
                                        <li>
                                            <a href="">laptop lenovo</a>
                                        </li>
                                        <li>
                                            <a href="">laptop msi</a>
                                        </li>
                                        <li>
                                            <a href="">laptop acer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">linh kiên máy tính
                                <i class="fa-solid fa-chevron-right" style="float: right;"></i>
                            </a>
                            <ul class="sub_menu1">
                                <li>
                                    <a href="">cpu</a>
                                </li>
                                <li>
                                    <a href="">ram</a>
                                </li>
                                <li>
                                    <a href="">vga</a>
                                </li>
                                <li>
                                    <a href="">ssd</a>
                                </li>
                                <li>
                                    <a href="">case</a>
                                </li>
                                <li>
                                    <a href="">mainmoard</a>
                                </li>
                                <li>
                                    <a href="">nguồn máy tính</a>
                                </li>
                                <li>
                                    <a href="">hdd</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">màn hình máy tính
                                <i class="fa-solid fa-chevron-right" style="float: right;"></i>
                            </a>
                            <ul class="sub_menu1">
                                <li>
                                    <a href="">màn hình gaming</a>
                                </li>
                                <li>
                                    <a href="">màn hình đồ họa</a>
                                </li>
                                <li>
                                    <a href="">màn hình samsung</a>
                                </li>
                                <li>
                                    <a href="">màn hình asus</a>
                                </li>
                                <li>
                                    <a href="">màn hình dell</a>
                                </li>
                                <li>
                                    <a href="">màn hình lg</a>
                                </li>
                                <li>
                                    <a href="">màn hình msi</a>
                                </li>
                                <li>
                                    <a href="">màn hình lenovo</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">thiết bị mạng
                                <i class="fa-solid fa-chevron-right" style="float: right;"></i>
                            </a>
                            <ul class="sub_menu1">
                                <li>
                                    <a href="">bộ phát wifi</a>
                                </li>
                                <li>
                                    <a href="">bộ kích sóng wifi</a>
                                </li>
                                <li>
                                    <a href="">usb wifi</a>
                                </li>
                                <li>
                                    <a href="">router wifi</a>
                                </li>
                                <li>
                                    <a href="">care mạng</a>
                                </li>
                                <li>
                                    <a href="">phụ kiện mạng</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">phụ kiện
                                <i class="fa-solid fa-chevron-right" style="float: right;"></i>
                            </a>
                            <ul class="sub_menu1">
                                <li>
                                    <a href="">tản nhiệt khí pc</a>
                                </li>
                                <li>
                                    <a href="">tản nước all in one</a>
                                </li>
                                <li>
                                    <a href="">quạt tản nhiệt pc</a>
                                </li>
                                <li>
                                    <a href="">phụ kiện pc</a>
                                </li>
                                <li>
                                    <a href="">dây cáp</a>
                                </li>
                                <li>
                                    <a href="">bàn ghế</a>
                                </li>
                                <li>
                                    <a href="">phụ kiện laptop</a>
                                </li>
                                <li>
                                    <a href="">thiết bị chuyển đổi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Xây dựng cấu hình pc</a></li>
                <li><a href="">khuyến mại</a></li>
                <li><a href="">liên hệ</a></li>
                <li><a href=""></a></li>

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
    <script src="js/Home.js"></script>
    <script>
        //cart	
        addToCart = function(_productId, _quantity) {
            // alert("Thêm "  + _quantity + _productId + " sản phẩm '" + _productName + "' vào giỏ hàng ");
            // let data = {
            //     productId: _productId, //lay theo id
            //     quantity: _quantity,
            // };
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
                // dataType: "json", //Kieu du lieu tra ve tu controller la json
            });
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