<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hien thi</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('shows.css') }}">
</head>
<body>
    <div>
    <span>{{Auth::user()->name}}</span>
    <a href="{{route('logout')}}">Quay lại</a>
</div>
<div class="container">
    <h1>Danh sách người dùng đã đăng ký</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Tùy chọn</th>
        </tr>
        <tbody>
        @foreach ($users as $user)
                <tr>
                    <td>#</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->user_type }}</td>
                    <td><button type="submit" name="sub"><a href="{{ route('Update', ['id' => $user->id]) }}">Sửa</a></button></td>
                </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>