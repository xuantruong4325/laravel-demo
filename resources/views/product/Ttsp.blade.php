@extends('layout/header')
@section('home')
<main>
    @foreach ($editfooters as $editfooter)
    <div class="sile">
        <!-- <div class="left">
            <a href="">
                <img src="/FileImage/Layout/{{ $editfooter->file_footer_left }}">
            </a>
        </div> -->
        <div class="between">
            <div class="between">
                <div id="between">{{ $product->content }}</div>
                <div class="container3">
                    <div class="a_sp">
                        <div class="slider_left">
                            @foreach($imageProducts as $imageProduct)
                            <div class="slider">
                                <img src="/imagesp/{{ $imageProduct->title }}" width="100%">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="flex-product">
                            <div class="product-info-left">
                                <div class="evaluate">
                                    <p>Đánh giá: </p>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span>8</span>
                                </div>
                                <div class="detail">
                                    <br>
                                    {!! $product->product_specifications !!}
                                </div>
                            </div>
                            <div class="product-info-right">
                                <div class="product-info-thongso">
                                    <div class="info-title">
                                        Thông số kỹ thuật
                                    </div>
                                    <div class="scroll-kt">
                                        <table style="width: 100%;">
                                            @if($company != null)
                                            <tr>
                                                <td class="test">
                                                    <p>Hãng sản xuất </p>
                                                </td>
                                                <td class="test1">{{ $company->name_company }}</td>
                                            </tr>
                                            @endif
                                            @foreach($datas as $data)
                                            <tr>
                                                <td class="test">
                                                    <p>{{ $data['nameTechni'] }}</p>
                                                </td>
                                                <td class="test1">{{ $data['contentTechni'] }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-uudai">
                            <div class="title-uudai">
                                <i class="fa-solid fa-gift"></i> Quà tặng và ưu đãi kèm theo
                            </div>
                            <div class="noidung-uudai">
                                <div class="box-text">
                                    @foreach($endows as $keg => $item)
                                    @if($item != null)
                                    <a href="#"><span class="soluongdeal">{{ $keg+1 }}</span>{{ $item['nameEndow'] }}</a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @if($product->quantity == 0)
                        @if(auth()->user() != null)
                        <form action="" id="formDkntb">
                            <div class="box-dathang">
                                <div class="title-dathang">đăng kí nhận thông tin khi có hàng</div>
                                <input name="name" type="text" placeholder="Họ tên (bắt buộc)" value="{{ Auth::user()->name }}">
                                <input name="phone" type="text" placeholder="Số điện thoại (bắt buộc)" value="{{ Auth::user()->phone }}">
                                <input name="email" type="email" placeholder="Email (bắt buộc)" value="{{ Auth::user()->email }}">
                                <input value="{{ $product->id }}" name="idProduct" type="text" style="z-index: -99; width: 0px; height: 0px; padding: 0px; border: 0px;">
                                <button type="submit">Đăng kí nhận thông</button>
                            </div>
                        </form>
                        @else
                        <form action="" id="formDkntb">
                            <div class="box-dathang">
                                <div class="title-dathang">đăng kí nhận thông tin khi có hàng</div>
                                <input name="name" type="text" placeholder="Họ tên (bắt buộc)">
                                <input name="phone" type="text" placeholder="Số điện thoại (bắt buộc)">
                                <input name="email" type="email" placeholder="Email">
                                <input value="{{ $product->id }}" name="idProduct" type="text" style="z-index: -99; width: 0px; height: 0px; padding: 0px; border: 0px;">
                                <button type="submit">Đăng kí nhận thông</button>
                            </div>
                        </form>
                        @endif
                        @else
                        <div class="pay">
                            <div class="price">
                                <div>
                                    <label>Giá khuyến mại:</label><br>
                                    @if($product->price_after_discount != null)
                                    <p>{{ number_format($product->price_after_discount, 0, '.', '.') }} đ
                                        <span class="span">{{ number_format($product->old_price, 0, '.', '.') }} đ</span>
                                    </p>
                                    @else
                                    <p>{{ number_format($product->old_price, 0, '.', '.') }} đ</p>
                                    @endif
                                </div>
                                <div>
                                    Tình trạng:
                                    <span id="span">
                                        <p><i class="fa-solid fa-check"></i>Còn hàng</p>
                                    </span>
                                </div>
                            </div>
                            <div class="purchase">
                                @if(auth()->user() != null)
                                <button type="button" onclick="addToCart('{{ $product->id }}',1,'{{ $product->content }}')"><i class="fa-solid fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                                <button type="button" onclick="addToCart2('{{ $product->id }}',1,'{{ $product->content }}')">Mua ngay</button>
                                @else
                                <button type="button" onclick="alert('Xin vui lòng đăng nhập')" href="{{route('Login')}}"><i class="fa-solid fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                                <button type="button" onclick="alert('Xin vui lòng đăng nhập')" href="{{route('Login')}}">Mua ngay</button>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="container3 information" style="width: 1000px;">
                    <div>Đánh giá: {{ $product->content }}</div>
                    <br>
                    {!! $product->product_reviews !!}
                </div>
                <div class="sp">
                    <div>
                        <hr class="hr_left" style="width: 32%;">
                        <hr class="hr_right" style="width: 32%;">
                        <h1>Sản Phẩm Tương Tự</h1>
                    </div>
                    <div class="gfgfgf">
                        @foreach($items as $product)
                        <div class="product" style="height: 350px;">
                            @if($product->discount != null)
                            <div class="discount">
                                <span id="discount">{{ $product->discount }}%</span>
                            </div>
                            @endif
                            <div class="info">
                                <a class="img_product" href="{{ route('ttsp', ['id' => $product->id]) }}">
                                    <img src="/image/{{ $product->file }}">
                                </a>
                                <div>
                                    <h3>
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
                                            <div class="tick"></div>
                                        </span>
                                        @else
                                        <span id="span">
                                            Còn hàng
                                            <a onclick="alert('Xin vui lòng đăng nhập')" href="{{route('Login')}}"><i class="fa-solid fa-cart-shopping iconCart"></i></a>
                                            <div class="tick"></div>
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="right">
            <a href="">
                <img src="/FileImage/Layout/{{ $editfooter->file_footer_right }}">
            </a>
        </div> -->

    </div>
    @endforeach
</main>
@endsection