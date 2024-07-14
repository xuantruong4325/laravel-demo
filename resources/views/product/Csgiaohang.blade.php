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
                <img src="images/uu-dai-van-chuyen-20220928022800-cdovp.png" alt="">
                <div class="giaohang box1">
                    <img src="images/noi-dung-uu-dai-van-chuyen-20240411083714-yvm2m.png" alt="">
                    <div class="free-ship">
                        <li>Không giới hạn giá trị đơn hàng.</li>
                        <li>Không giới hạn địa điểm nhận hàng.</li>
                    </div>
                    <div class="giaohang-giamgia">
                        <li>Hưởng đầy đủ chương trình khuyến mãi,<br> giảm giá của Sản phẩm</li>
                    </div>
                </div>
                <li class="center-space">
                    Những trường hợp Khách hàng chịu phí vận chuyển: Chuyển phát nhanh,
                    giao hàng COD (thanh toán tiền tại nơi nhận hàng), giao hàng đảm bảo,
                    những hình thức giao hàng theo yêu cầu từ Khách hàng, những sản phầm cồng kềnh như bàn ghế,
                    màn chiếu.
                </li>
                <div class="giaohang box2">
                    <img src="images/bao-hanh-va-thanh-toan-20220928022748-cyyhy.png" alt="">
                    <p class="text-baohanh">
                        Các sản phẩm tại <span>Laptop.vn</span> được áp dụng đầy đủ tất cả các chính sách bảo hành của <span>Laptop.vn</span> như các hình thức mua hàng khác.
                    </p>
                    <p class="text-thanhtoan">
                        Các sản phẩm tại <span>Laptop.vn</span> được áp dụng đầy đủ tất cả các hình thức thanh toán của <span>Laptop.vn</span> ở hiện tại.
                    </p>
                </div>
                <img src="images/trach-nhiem-voi-hang-hoa-20220928022800-30u-u.png" alt="">
                <ul>
                    <li>
                        Nếu dịch vụ vận chuyển do <span>Laptop.vn</span> chỉ định, chúng tôi sẽ chịu trách nhiệm với
                        hàng hóa và các rủi ro như mất mát hoặc hư hại của hàng hóa trong suốt quá
                        trình vận chuyển hàng từ <span>Laptop.vn</span> đến Quý khách.
                    </li>
                    <li>Quý khách có trách nhiệm kiểm tra hàng hóa khi nhận hàng.</li>
                    <li>
                        Khi phát hiện hàng hóa bị hư hại, trầy xước, bể vỡ, móp méo, hoặc sai hàng hóa thì ký xác
                        nhận tình trạng hàng hóa với nhân viên giao nhận và thông báo ngay cho bộ phận chăm sóc khách hàng
                    </li>
                    <li>
                        Sau khi Quý khách đã ký nhận hàng mà không ghi chú hoặc có ý kiến về hàng hóa. <span>Laptop.vn</span> không có trách
                        nhiệm với những yêu cầu đổi trả vì hư hỏng, trầy xước, bể vỡ, móp méo, sai hàng hóa,… từ Quý khách sau này.
                    </li>
                    <li>
                        Nếu dịch vụ vận chuyển do Quý khách chỉ định và lựa chọn thì Quý khách sẽ chịu trách nhiệm với hàng hóa và
                        các rủi ro như mất mát hoặc hư hại của hàng hóa trong suốt quá trình vận chuyển hàng từ <span>Laptop.vn</span> đến Quý khách.
                        Khách hàng sẽ chịu trách nhiệm cước phí và tổn thất liên quan.
                    </li>
                    <li>Để bảo vệ quyền lợi khi mua sắm trực tuyến, tránh các thủ đoạn lừa đảo không mong muốn </li>
                    <li><span>Laptop.vn</span> khuyến cáo khách hàng :</li>
                    <li>Chỉ thanh toán mua hàng trên Website, các kênh online và cửa hàng chính thống của <span>Laptop.vn</span>.</li>
                    <li>Khi thanh toán bằng hình thức chuyển khoản, chỉ thanh toán qua số tài khoản tên chính thức của <span>Laptop.vn</span>.
                    </li>
                </ul>
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