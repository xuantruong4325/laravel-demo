@extends('layout/layouts')
@section('main')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Danh sách sản phẩm trong giỏ hàng</h4>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Tên khách hàng: {{ $cart->nameUser }}</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Số điện thoại: {{ $cart->phoneUser }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Địa chỉ: {{ $cart->address }}</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <form action="" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label>Tạng thái đơn hàng:</label>
                                    @if($cart->order_status == 3)
                                    <select class="custom-select col-10" name="order_status" id="statusCart">
                                        <option value="3" {{ $cart->order_status === '3' ? 'selected' : '' }}>Đã hủy</option>
                                    </select>
                                    @else
                                    <select class="custom-select col-10" name="order_status" id="statusCart">
                                        <option value="0" {{ $cart->order_status === '0' ? 'selected' : '' }}>Chờ xác nhận</option>
                                        <option value="1" {{ $cart->order_status === '1' ? 'selected' : '' }}>Đang giao</option>
                                        <option value="2" {{ $cart->order_status === '2' ? 'selected' : '' }}>Đã giao</option>
                                        <option value="3" {{ $cart->order_status === '3' ? 'selected' : '' }}>Đã hủy</option>
                                    </select>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td>Giá</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartProducts as $keg => $cartProduct)
                                <tr>
                                    <td>{{ $keg+1 }}</td>
                                    <td>{{ $cartProduct->nameProduct }}</td>
                                    <td><img src="/image/{{ $cartProduct->avatar }}" alt="" width="50" header="50"></td>
                                    <td>{{ $cartProduct->quantity }}</td>
                                    <td>{{ $cartProduct->price }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tr>
                                <td></td>
                                <td colspan="2" style="text-align: center;">
                                    <p style="font-size: 25px;">Tổng</p>
                                </td>
                                <td>{{ $cart->totalPrice }}</td>
                                <td>{{ $cart->totalProduct }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        $('#statusCart').on('change', function() {
            var id = $(this).val();
            var id_orde = {{ $cart->id }};
            if (id) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('statusCart') }}",
                    type: "POST",
                    data: {
                        'code': id,
                        'code_order': id_orde,
                    },
                    success: function(data) {
                        alert("Thay đổi trạng thái thành công");
                        location.reload(); // Tải lại trang
                    },
                });
            }
        });

</script>
@endsection

<!-- ->appends($request->all()) -->