@extends('layout/layouts')
@section('main')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <div class="row clearfix">
                                <div class="col-md-4 col-sm-12 mb-30">
                                    <div class="">
                                        <a href="{{ route('addCategory') }}" class="btn btn-primary" type="button" style=" margin:20px -330px 0 0;">
                                            Thêm loại sản phẩm
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Danh sách loại sản phẩm</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Loại sản phẩm</th>
                                <th>Ngày tạo</th>
                                <th>Ngày sửa đổi</th>
                                <th class="datatable-nosort">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($category as $keg => $category)

                            <tr>
                                <td>{{ $keg +1 }}</td>
                                <td>{{ $category->name_category }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('editCategory', ['id' => $category->id]) }}"><i class="dw dw-edit2"></i> Sửa</a>
                                            <a class="dropdown-item" href="{{ route('deleteCategory', ['id' => $category->id]) }}"><i class="dw dw-delete-3"></i> Xóa</a>
                                        </div>
                                    </div>
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
@endsection