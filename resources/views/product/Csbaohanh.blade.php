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
            <div class="form-baohanh">
                <div class="title-baohanh">Các bước bảo hành sản phẩm</div>
                <div class="baohanh-1">
                    <div>
                        <img src="images/minh-hoa-20230204025758-wi4qk.png" alt="">
                        <p>Liên hệ với Laptop.vn</p>
                    </div>
                    <div>
                        <img class="img2" src="images/minh-hoa-4-20230204025758-rqvw5.png" alt="">
                        <p>Chuyển sản phẩm cần bảo hành tới chi nhánh</p>
                    </div>
                    <div>
                        <img class="img3" src="images/minh-hoa-3-20230204082729-8wa-o.png" alt="">
                        <p>Bảo hành và bàn giao sản phẩm</p>
                    </div>
                </div>
                <div class="baohanh-2">
                    <div class="box-baohanh" style="background-image: url(images/buoc-1-20230202080740-vh7dv.png);">
                        <h2><span>Bước 1</span> Liên hệ với Laptop.vn</h2>
                        <div class="text-baohanh">
                            <p>Khi có nhu cầu bảo hành sản phẩm, khách hàng vui lòng liên hệ với HACOM qua hình thức sau:</p>
                            <li>Tổng đài bảo hành</li>
                            <li>Trò chuyện trực tiếp tại Website hoặc Fanpage</li>
                            <li>Liên hệ trực tiếp tại cửa hàng của Laptop.vn</li>
                        </div>
                        <div class="mess-call">
                            <div>
                                <img src="images/call-now-20230202082035-uwyqm.png" alt="">
                                <p>Gọi ngay : 1900 9999</p>
                            </div>
                            <div>
                                <img src="images/chat-now-20230202082035-hurym.png" alt="">
                                <p class="text-call">Chat với chúng tôi</p>
                            </div>
                        </div>
                    </div>
                    <!-- B2 -->
                    <div class="box-baohanh" style="background-image: url(images/buoc-1-20230202080740-vh7dv.png);">
                        <h2><span>Bước 2</span> Chuyển sản phẩm tới bảo hành</h2>
                        <div class="text-baohanh">
                            <p>Trung tâm bảo hành Laptop.vn:</p>
                            <li>Quý khách gửi sản phẩm bảo hành tại cửa hàng của Laptop.vn</li>
                        </div>
                        <div class="note-baohanh">
                            <img src="images/note-20230202084820-jsxvg.png" alt="">
                            <p>Quý khách vui lòng liên hệ nhân viên tư vấn trước khi gửi hàng để được hỗ trợ cũng như tránh thất thoát hàng hóa.</p>
                        </div>
                    </div>
                    <!-- B3 -->
                    <div class="box-baohanh" style="background-image: url(images/buoc-1-20230202080740-vh7dv.png);">
                        <h2><span>Bước 3</span>Bảo hành và bàn giao sản phẩm</h2>
                        <div class="text-baohanh">
                            <p>Hoàn tất xử lý bảo hành và bàn giao sản phẩm đến khách hàng.</p>
                        </div>
                    </div>
                </div>

                <div class="title-baohanh">Điều kiện bảo hành sản phẩm</div>
                <div class="baohanh-3">
                    <div>
                        <h2>
                            <img src="images/icon1-20230206013832-nt1e3.png" alt="">
                            <p>NHỮNG SẢN PHẨM ĐỦ ĐIỀU KIỆN BẢO HÀNH</p>
                        </h2>
                        <ul>
                            <li>Sản phẩm nếu có tem niêm phong (seal) trên sản phẩm thì tem niêm phong phải còn nguyên vẹn.</li>
                            <li>Đối với sản phẩm bảo hành trên hộp: sản phẩm còn đầy đủ hộp.</li>
                            <li>Sản phẩm không trầy xước, cấn móp, bể, vỡ, biến dạng so với ban đầu.</li>
                        </ul>
                    </div>

                    <div>
                        <h2>
                            <img src="images/icon2-20230206013832-4mq2-.png" alt="">
                            <p>NHỮNG SẢN PHẨM KHÔNG ĐỦ ĐIỀU KIỆN BẢO HÀNH</p>
                        </h2>
                        <ul>
                            <li>Hết thời hạn bảo hành.</li>
                            <li>Không có tem niêm phong, hoặc bị tẩy xóa, không còn nguyên dạng ban đầu.</li>
                            <li>Bị tác động vật lý làm trầy xước, cong vênh, rạn nứt, bể vỡ trong quá trình quá trình sử dụng.</li>
                            <li>Bị hư hỏng do tự ý thảo mở, sửa chữa, thay đổi cấu trúc sản phẩm bên trong mà chưa có sự xác nhận đồng ý hoặc giám sát bởi kỹ thuật viên Laptop.vn</li>
                            <li>Bị hư hỏng, chập, cháy do sử dụng sai mục đích, tự ý tháo, lắp đặt không tuân theo các hướng dẫn sử dụng đính kèm theo sản phẩm.</li>
                            <li>Bị hư hỏng do côn trùng xâm nhập (chuột, gián, kiến, mối…).</li>
                            <li>Bị hư hỏng do thiên tai, hỏa hoạn, lụt lội, sét đánh, rỉ sét, hao mòn do môi trường gây ra.</li>
                        </ul>
                    </div>
                </div>

                <div class="title-baohanh">Chính sách bảo hành chung</div>
                <div class="baohanh-4">
                    <h3 class="title-baohanh-4">1. Sản phẩm đổi mới 100%</h3>
                    <div class="baohanh-4-1">
                        <img class="img-baohanh-4-1" src="images/minh-hoa-5-20230204082434-dlyss.png" alt="">
                        <div>
                            <h2>
                                <img src="images/icon1-20230206013832-nt1e3.png" alt="">
                                <p>ĐIỀU KIỆN SẢN PHẨM ĐƯỢC ÁP DỤNG <br> <span>ĐỔI MỚI 100%</span></p>
                            </h2>
                            <ul>
                                <li>Trong 15 ngày đầu khi phát sinh lỗi từ nhà sản xuất</li>
                                <li>Sản phẩm phải có đầy đủ vỏ hộp, phụ kiện kèm theo, không bị trầy xước.</li>
                                <li>Không vi phạm điều kiện bảo hành khác và không phải là vật tư tiêu hao.</li>
                                <li>
                                    Không áp dụng với các sản phẩm: CPU, máy in, máy chiếu, máy photo, máy fax, TV,
                                    các sản phẩm của Apple, Surface, máy chơi game Sony, Nintendo, Xbox, hàng thanh lý,…
                                    (nếu lỗi Laptop.vn sẽ tiếp nhận bảo hành sản phẩm).
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="title-baohanh-4">2. Sản phẩm tiếp nhận bảo hành</h3>
                    <div class="baohanh-4-2">
                        <div style="background-image: url(images/1-20230204083120-pbnfc.png);">
                            <span>Từ ngày thứ 16</span>
                            Từ ngày 16 cho đến hết thời gian bảo hành, Laptop.vn cam kết khắc phục sự cố và
                            trả bảo hành trong thời gian 10 ngày (không tính thứ bảy, chủ nhật, các ngày
                            lễ, Tết và các trường hợp khác được thỏa thuận trước), những sản phẩm phải gửi
                            bảo hành nước ngoài thời gian chờ bảo hành sẽ theo chính sách của hãng: Apple, Surface, Intel,…
                        </div>

                        <div style="background-image: url(images/2-20230204083120-qqrrh.png);position: relative;top: -70px;">
                            <span>Cộng thêm bảo hành</span>
                            Laptop.vn cam kết cộng thêm thời hạn bảo hành số ngày tương ứng với số ngày Khách hàng gửi bảo hành
                            sản phẩm, số ngày này được tính từ ngày Quý khách đi gửi bảo hành sản phẩm đến khi nhận được thông
                            báo sản phẩm đã được bảo hành xong.
                        </div>
                    </div>

                    <h3 class="title-baohanh-4">3. Trường hợp không bảo hành được hoặc thời gian bảo hành quá lâu</h3>
                    <div class="baohanh-4-3">
                        <div>
                            <img src="images/icon3-20230206013832-fihl9.png" alt="">
                            <p>
                                <span>A. ĐỔI SANG THIẾT BỊ KHÁC</span> <br>
                                Đổi sang thiết bị khác tương đương với sản phẩm bảo hành hoặc
                                sản phẩm có thông số kỹ thuật cao hơn với chi phí thỏa thuận.
                            </p>
                        </div>

                        <div>
                            <img src="images/icon4-20230206013832-swjwu.png" alt="">
                            <p>
                                <span>B. NHẬP LẠI SẢN PHẨM THEO GIÁ THỎA THUẬN</span> <br>
                                Giá nhập lại sản phẩm được tính dựa trên: tình trạng vật lý của sản phẩm, phụ kiện,
                                vỏ hộp,…và khấu hao thời gian sử dụng.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="title-baohanh">Chính sách bảo hành tận nơi sử dụng</div>
                <div class="baohanh-5">
                    <div class="baohanh-5-top">
                        <div>
                            <h2>KHÁCH HÀNG DOANH NGHIỆP</h2>
                            <li>Áp dụng cho khách hàng doanh nghiệp có thẻ bảo hành vàng của Laptop.vn</li>
                        </div>
                        <img src="images/minh-hoa-6-20230206023244-iltgm.png" alt="">
                    </div>
                    <div class="baohanh-5-bottom">
                        <img src="images/minh-hoa-7-20230206023244-y7e-j.png" alt="">
                        <div>
                            <h2>KHÁCH HÀNG CÁ NHÂN</h2>
                            <li>Dịch vụ bảo hành tận nơi sử dụng chỉ áp dụng cho khách hàng có địa chỉ cách chi nhánh gần nhất < 20km.</li>
                            <li>Chúng tôi sẽ có mặt trực tiếp để thực hiện nghiệp vụ bảo hành tại nơi sử dụng cho sản phẩm của Quý khách.</li>
                            <li>Thời gian đáp ứng yêu cầu bảo hành tại nơi sử dụng: Chậm nhất là 180 phút kể từ thời điểm nhận được thông tin của khách hàng.</li>
                        </div>
                    </div>
                </div>
            </div>

            <div class="camon">
                Laptop.vn chân thành cảm ơn quý khách
            </div>

            <div class="betwen-bottom">
                <h1>ĐĂNG KÝ NHẬN EMAIL THÔNG BÁO KHUYẾN MẠI HOẶC ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ</h1>
                <form>
                    <input type="text" placeholder="Nhập email hoặc số điện thoại của bạn">
                    <button>Gửi</button>
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
@endsection