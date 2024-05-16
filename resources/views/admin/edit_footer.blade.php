@extends('layout/layouts')
@section('main')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="text-center">
                        <h4 class="text-blue h3">Sửa footer</h4>
                    </div>
                </div>
                <form action="{{ route('from_footer_save', ['id' => $editfooter->id]) }}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="productType">Câu chào</label>
                            <input type="text" name="name" class="form-control form-control-lg" />
                        </div>
                        <div class="form-group">
                            <h5 class="mb-1">File_banner1</h5>
                            <input class="form-control-file form-control height-auto" name="file_banner1" type="file" />
                            <img src="/FileImage/Layout/{{ $editfooter->file_banner1 }}" alt="" width="100" header="50">
                        </div>
                        <div class="form-group">
                            <h5 class="mb-1">File_banner2</h5>
                            <input class="form-control-file form-control height-auto" name="file_banner2" type="file" />
                            <img src="/FileImage/Layout/{{ $editfooter->file_banner2 }}" alt="" width="100" header="50">
                        </div>
                        <div class="form-group">
                            <h5 class="mb-1">File_banner3</h5>
                            <input class="form-control-file form-control height-auto" name="file_banner3" type="file" />
                            <img src="/FileImage/Layout/{{ $editfooter->file_banner3 }}" alt="" width="100" header="50">
                        </div>
                        <div class="form-group">
                            <h5 class="mb-1">File_banner4</h5>
                            <input class="form-control-file form-control height-auto" name="file_banner4" type="file" />
                            <img src="/FileImage/Layout/{{ $editfooter->file_banner4 }}" alt="" width="100" header="50">
                        </div>
                        <div class="form-group">
                            <h5 class="mb-1">File_banner4_cart</h5>
                            <input class="form-control-file form-control height-auto" name="file_cart" type="file" />
                            <img src="/FileImage/Layout/{{ $editfooter->file_cart }}" alt="" width="100" header="50">
                        </div>
                        <div class="form-group">
                            <h5 class="mb-1">File_footer_left</h5>
                            <input class="form-control-file form-control height-auto" name="file_footer_left" type="file" />
                            <img src="/FileImage/Layout/{{ $editfooter->file_footer_left }}" alt="" width="50" header="100">
                        </div>
                        <div class="form-group">
                            <h5 class="mb-1">File_footer_right</h5>
                            <input class="form-control-file form-control height-auto" name="file_footer_right" type="file" />
                            <img src="/FileImage/Layout/{{ $editfooter->file_footer_right }}" alt="" width="50" header="100">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="addConten()">Xác nhận</button>
                        <a href="{{  route('ndbanner')  }} " class="btn btn-primary btn-lg btn-block">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //         function take_url_edit_key(id) {
    //     $.ajax({
    //         headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //         type: "POST",
    //         data:{

    //             'id': id
    //         },
    //         url: "",
    //         success: function (response) {
    //             $('form')[1].action = response.url;
    //             $("input[name=title]").val(response.unit_name);
    //         }
    //     });  
    // }
    function addConten() {
        Swal.fire('Sửa nội dung mới thành công', '', 'success')
    }
</script>
@endsection