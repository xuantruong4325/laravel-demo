@extends('layout/layouts')
@section('main')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Danh sách ngân hàng</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên ngân hàng</th>
                                <th>Tên chủ tài khoản</th>
                                <th>Số tài khoản</th>
                                <th>Mã qr</th>
                                <th>Ngày tạo</th>
                                <th>Ngày sửa đổi</th>
                                <th class="datatable-nosort">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($banks as $keg => $bank)

                            <tr>
                                <td>{{ $keg +1 }}</td>
                                <td>{{ $bank->nameBank }}</td>
                                <td>{{ $bank->name }}</td>
                                <td>{{ $bank->account_number }}</td>
                                <td>
                                    <img src="/code_qr/{{ $bank->code_qr }}" alt="" width="50" header="50">
                                </td>
                                <td>{{ $bank->created_at }}</td>
                                <td>{{ $bank->updated_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('editBank', ['id' => $bank->id]) }}"><i class="dw dw-edit2"></i> Sửa</a>
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