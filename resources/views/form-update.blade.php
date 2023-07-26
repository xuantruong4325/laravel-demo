<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sửa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('test.css') }}">
    <script src='main.js'></script>
</head>
<body>
    <div class="form_dang_ky">
        <h1>Sửa nội dung</h1>
        <form action="{{ route('ndUpdate', ['id' => $content->id]) }}" method="post" role="form" enctype="multipart/form-data">
			@csrf
            <div class="row">
                <label >
                    Tiêu đề
                </label>
                <input type="text" name="title" class="from-control" value="">
            </div>
            <div class="row">
                <label>Thể loại</label>
                <input type="text" name="category" class="from-control" value="">
            </div>
            <div class="row">
                <label>Ảnh</label>
                <input type="file" name="file"  value="">
            </div>
            <div class="row">
                <label>Nội dung</label>
                <textarea name="content" id="desccription" ></textarea>
            </div>
            <div class="row">
                <label>Tác giả</label>
                <input type="text" name="author" class="from-control" value="">
            </div>
            <div class="row">
                <label>Trạng thái</label>
                <select name="status" class="from-control">
                    <option value="Publish">Xuất bản</option>
                    <option value="Draft">Nháp</option>
                    <option value="Browsing">Đang duyệt</option>
                </select>
            </div>
            <div class="row">
                <button type="submit">Xác nhận</button>
                <button type="button">Hủy</button>
            </div>
        </form>
    </div>
</body>
</html>