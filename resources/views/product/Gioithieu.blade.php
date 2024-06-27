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
            <!-- <div class="bw-gt-ctn">
                <h1 class="title-gt">Giới thiệu về Laptop.vn</h1>
                <div class="gt box-1">
                    @foreach ($introduces as $introduce)
                    {!! $introduce->general_info !!}
                    @endforeach
                </div>
                <div class="gt box-2">
                    @foreach ($introduces as $introduce)
                    {!! $introduce->aditional_info !!}
                    @endforeach
                </div>
            </div>
            <div class="betwen-bottom">
                <h1>ĐĂNG KÝ NHẬN EMAIL THÔNG BÁO KHUYẾN MẠI HOẶC ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ</h1>
                <form>
                    <input type="text" placeholder="Nhập email hoặc số điện thoại của bạn">
                    <button>Gửi</button>
                </form>
            </div> -->
            <div class="bw-gt-ctn">
                <h1 class="title-gt">Giới thiệu về Laptop.vn</h1>
                <div class="gt box-1">
                    <h2>Giới thiệu chung</h2>
                    <hr>
                    <p>
                        <span>Laptop.vn</span> hoạt động chủ yếu trong lĩnh vực bán lẻ các sản phẩm máy tính và thiết bị văn phòng. Trải qua chặng đường nhiều năm phát triển,
                        đến nay <span>Laptop.vn</span> đã trở thành một trong những thương hiệu trong lĩnh vực kinh doanh các sản phẩm Công nghệ thông tin tại Việt Nam .
                        Nhiều tổ chức uy tín liên tục đánh giá cao <span>Laptop.vn</span> với nhiều giải thưởng danh giá: Top 50 Nhãn hiệu nổi tiếng Việt Nam do Hội Sở
                        hữu Trí tuệ Việt Nam công nhận và trao tặng.Top 500 Doanh nghiệp tăng trưởng nhanh nhất Việt Nam 2021 và 2022 (FAST500),
                        top 500 Doanh nghiệp lớn nhất Việt Nam 2021 (VNR500).
                        Với khẩu hiệu <span>“Uy tín tạo dựng niềm tin”</span>, <span>Laptop.vn</span> mong muốn xây dựng “niềm tin” của Khách hàng bằng chất lượng dịch vụ tốt nhất,
                        vượt trội nhất. Đó cũng chính là kim chỉ nam cho sự phát triển bền vững mà <span>Laptop.vn</span> hướng đến.
                    </p>
                </div>
                <div class="gt box-2">
                    <h2>Tầm nhìn và sứ mệnh</h2>
                    <hr>
                    <h3>Tầm nhìn:</h3>
                    - Là chuỗi bán lẻ các sản phẩm công nghệ hàng đầu với độ phủ rộng khắp các tỉnh thành trên cả nước.
                    <h3>Sứ mệnh:</h3>
                    - Với sứ mệnh phụng sự, chúng tôi đem đến cho khách hàng những trải nghiệm và dịch vụ ưu việt, qua đó tạo nên những giá trị tốt đẹp hơn cho cộng đồng và cuộc sống.
                </div>
                <div class="gt box-3">
                    <h2>Giá trị cốt lỗi</h2>
                    <hr>
                    <p class="title-box-3">Văn hóa Laptop.vn được thể hiện qua bốn giá trị cốt lõi: <span>TẬN TÂM - TRÁCH NHIỆM - TRÁCH NHIỆM - KHÁC BIỆT</span></p>
                    <div>
                        <div class="box-flex yellow">
                            <img src="images/gia-tri-cot-loi-my-4-150x150.jpg" alt="">
                            <h1 class="title-box-flex">Tận tâm</h1>
                            <b>“Vượt trên sự mong đợi”</b>
                            <p>
                                Laptop.vn đặt tận tâm là nền tảng của phục vụ, lấy khách hàng làm trung tâm, mang đến những giá trị
                                đích thực tới khách hàng và đối tác.
                            </p>
                        </div>
                        <div class="box-flex red">
                            <img src="images/gia-tri-cot-loi-my-5-150x150.jpg" alt="">
                            <h1 class="title-box-flex">Trách nhiệm</h1>
                            <b>“Chúng ta luôn cố gắng”</b>
                            <p>Laptop.vn đặt chữ TÍN lên hàng đầu, luôn thể hiện tinh thần trách nhiệm cao cùng phương châm “Làm hết việc chứ không làm hết giờ”.</p>
                        </div>
                        <div class="box-flex blue">
                            <img src="images/gia-tri-cot-loi-my-7-150x150.jpg" alt="">
                            <h1 class="title-box-flex">Khác biệt</h1>
                            <b>“Dám nghĩ - Dám làm”</b>
                            <p>Laptop.vn đặt sự khác biệt là chủ trương để xây dựng công ty thành một doanh nghiệp dẫn đầu.</p>
                        </div>
                        <div class="box-flex purple">
                            <img src="images/gia-tri-cot-loi-my-6-150x150.jpg" alt="">
                            <h1 class="title-box-flex">Sáng tạo</h1>
                            <b>“Không gì là không thể”</b>
                            <p>Laptop.vn coi sáng tạo là đòn bẩy để phát triển, luôn đề cao các sáng kiến để hoàn thiện, hiệu quả hơn, nâng tầm giá trị.</p>
                        </div>
                    </div>
                </div>
                <div class="gt box-4">
                    <h2>CÁC LĨNH VỰC KINH DOANH</h2>
                    <hr>
                    <div>
                        <div class="box-4-left"><img src="images/hacomprofile-072.jpg" alt=""></div>
                        <div class="box-4-right">
                            <p>
                                Đặc biệt trong lĩnh vực Tin học, Laptop.vn chú trọng các hoạt động như: <br><br>
                                > Thiết kế giải pháp tổng thể (thiết kế hệ thống, xây dựng mạng LAN, WAN,..) <br>
                                > Cung cấp các thiết bị tin học (Máy chủ, máy tính PC, máy tính NOTEBOOKS, các thiết bị ngoại vi, các ứng dụng) <br>
                                > Cung cấp phần mềm của các hãng trên thế giới, các phần mềm quản lý, truyền thông… <br>
                                > Tư vấn và đào tạo cho khách hàng <br>
                                > Các dịch vụ bảo hành, bảo trì… <br> <br>
                                Qua thời gian hoạt động, Laptop.vn đã tạo được uy tín và sự tin cậy của khách hàng giúp công ty ngày càng lớn mạnh trong các lĩnh vực hoạt động.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="gt box-5">
                    <h2>Đối tác của Laptop.vn</h2>
                    <hr>
                    <div>
                        <img src="images/doitac1m.jpg" alt="">  
                        <img src="images/doitac2.jpg" alt="">
                    </div>
                </div>
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