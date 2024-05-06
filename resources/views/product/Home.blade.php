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
            <div class="container1">
                <!-- @if($errors->has('notification'))
                <span class="error">{{ $errors->first('notification') }}</span>
                @endif -->
                <form action="" method="post">
                    @csrf
                    <div class="sp">
                        <div>
                            <hr class="hr_left">
                            <hr class="hr_right">
                            <h1>Sản Phẩm</h1>
                        </div>
                        <div class="gfgfgf">
                            @foreach ($contents as $conten)
                            @if($conten->product_type == 'Sp')
                            @if($conten->status == 'Publish' || $conten->status == 'Draft')
                            <div class="product">
                                @if($conten->discount != null)
                                <div class="discount">
                                    <span id="discount">{{ $conten->discount }}</span>
                                </div>
                                @endif
                                <div class="info">
                                    <a class="img_product" href="">
                                        <img src="/image/{{ $conten->file }}" alt="">
                                    </a>
                                    <div>
                                        <h3>
                                            <a href="">{{ $conten->content }}</a>
                                        </h3>
                                        <div class="a">
                                            @if($conten->price_after_discount != null)
                                            {{ number_format($conten->price_after_discount, 0, '.', '.') }} đ
                                            <span class="span">{{ number_format($conten->old_price, 0, '.', '.') }} đ</span>
                                            @else
                                            {{ number_format($conten->old_price, 0, '.', '.') }} đ
                                            @endif
                                            <br>
                                            @if($conten->status == 'Publish')
                                            <span id="span">
                                                Còn hàng
                                                <a onclick="addToCart('{{ $conten->id }}',1)"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <div class="tick"></div>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            @endforeach
                        </div>

                        <button id="but" type="submit">Xem Thêm</button>
                    </div>
                    <div class="spm">
                        <div>
                            <hr class="hr_left" style="width: 37%;">
                            <hr class="hr_right" style="width: 37%;">
                            <h1>Sản Phẩm Mới</h1>
                        </div>
                        <div class="gfgfgf">
                            @foreach ($contents as $conten)
                            @if($conten->product_type == 'Spm')
                            @if($conten->status == 'Publish' || $conten->status == 'Draft')
                            <div class="product">
                                @if($conten->discount != null)
                                <div class="discount">
                                    <span id="discount">{{ $conten->discount }}</span>
                                </div>
                                @endif
                                <div class="info">
                                    <a class="img_product" href="">
                                        <img src="/image/{{ $conten->file }}" alt="">
                                    </a>
                                    <div>
                                        <h3>
                                            <a href="" name="name">{{ $conten->content }}</a>
                                        </h3>
                                        <div class="a">
                                            @if($conten->price_after_discount != null)
                                            {{ number_format($conten->price_after_discount, 0, '.', '.') }} đ
                                            <span class="span">{{ number_format($conten->old_price, 0, '.', '.') }} đ</span>
                                            @else
                                            {{ number_format($conten->old_price, 0, '.', '.') }} đ
                                            @endif
                                            <br>
                                            @if($conten->status == 'Publish')
                                            <span id="span">
                                                Còn hàng
                                                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                                                <div class="tick"></div>
                                            </span>
                                            @elseif($conten->status == 'Draft')
                                            <span id="span2">
                                                Đặt trước
                                                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            @endforeach
                        </div>
                        <button id="but" type="button">Xem Thêm</button>
                    </div>

                    <div class="spbc">
                        <div>
                            <hr class="hr_left" style="width: 33%;">
                            <hr class="hr_right" style="width: 33%;">
                            <h1>Sản Phẩm Bán chạy</h1>
                        </div>
                        <div class="gfgfgf">
                            @foreach ($contents as $conten)
                            @if($conten->product_type == 'Spbc')
                            @if($conten->status == 'Publish' || $conten->status == 'Draft')
                            <div class="product">
                                @if($conten->discount != null)
                                <div class="discount">
                                    <span id="discount">{{ $conten->discount }}</span>
                                </div>
                                @endif
                                <div class="info">
                                    <a class="img_product" href="">
                                        <img src="/image/{{ $conten->file }}" alt="">
                                    </a>
                                    <div>
                                        <h3>
                                            <a href="">{{ $conten->content }}</a>
                                        </h3>
                                        <div class="a">
                                            @if($conten->price_after_discount != null)
                                            {{ number_format($conten->price_after_discount, 0, '.', '.') }} đ
                                            <span class="span">{{ number_format($conten->old_price, 0, '.', '.') }} đ</span>
                                            @else
                                            {{ number_format($conten->old_price, 0, '.', '.') }} đ
                                            @endif
                                            <br>
                                            @if($conten->status == 'Publish')
                                            <span id="span">
                                                Còn hàng
                                                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                                                <div class="tick"></div>
                                            </span>
                                            @elseif($conten->status == 'Draft')
                                            <span id="span2">
                                                Đặt trước
                                                <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            @endforeach

                        </div>
                        <button id="but" type="button">Xem Thêm</button>
                    </div>
                </form>
                <script>

                </script>
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