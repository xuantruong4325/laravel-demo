@extends('layout/layouts')
@section('main')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Danh sách khách hàng nhận thông báo</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Id sản phẩm</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($dkntbs as $keg => $dkntb)

                            <tr>
                                <td>{{ $keg +1 }}</td>
                                <td>{{ $dkntb->name }}</td>
                                <td>{{ $dkntb->phone }}</td>
                                <td>{{ $dkntb->email }}</td>
                                <th>{{ $dkntb->idProduct }}</th>
                                <td>
                                    <form action="" method="POST">
                                        @csrf
                                        <input value="{{ $dkntb->id }}" id="idDkntb" name="idDkntb" type="text" style="width: 0px; height: 0px; padding: 0px; border: 0px;" oninput="new_price()">
                                        <select name="status" class="form-control" id="dkntbSta" onchange="new_price()">
                                            <option value="0" {{ $dkntb->status === '0' ? 'selected' : '' }}>Chưa liên hệ</option>
                                            <option value="1" {{ $dkntb->status === '1' ? 'selected' : '' }}>Đã liên hệ</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    // $('#dkntbSta').on('change', function() {
    //     if (id) {
    //         $.ajax({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             url: "{{ route('dkntbEdit') }}",
    //             type: "POST",
    //             data: $(this).serialize(),
    //             success: function(data) {
    //                 alert("Thay đổi trạng thái thành công");
    //                 location.reload(); // Tải lại trang
    //             },
    //         });
    //     }
    // });

    function new_price() {

        let x = parseInt(document.getElementById('dkntbSta').value, 10);
        let y = document.getElementById('idDkntb').value;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('dkntbEdit') }}",
            type: "POST",
            data: {
                'dkntbSta': x,
                'idDkntb': y,
            },
            success: function(data) {
                alert("Thay đổi tình trạng thành công");
                location.reload(); // Tải lại trang
            },
        });
    }
</script>
@endsection