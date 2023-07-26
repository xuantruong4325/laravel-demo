<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Thông tin sản phẩm</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('test.css') }}">
    <script src='main.js'></script>
</head>
<body>
    <div class="form_dang_ky">
        <h1>Xem nội dung</h1>
                <div class="row">
                    <label >
                        Tiêu đề: {{  $pro->title  }}
                    </label>
                    <hr>
                </div>
                <div class="row">
                    <label>Thể loại: {{  $pro->category  }}</label>
                    <hr>
                </div>
                <div class="row">
                    <label>Ảnh:</label>
                    <img src="/image/{{ $pro->file }}" alt="" width="100">
                    <hr>
                </div>
                <div class="row">
                    <label>Nội dung: {{  $pro->content  }}</label>
                    <hr>
                </div>
                <div class="row">
                    <label>Tác giả: {{  $pro->author  }}</label>
                    <hr>
                </div>
                <div class="row">
                    <label>Trạng thái: 
                        @if($pro->status == 'Publish')
                            Xuất bản
                        @elseif($pro->status == 'Draft')
                            Nháp
                        @else 
                            Đang duyệt
                        @endif
                    </label>
                    <hr>
                </div>
        <div class="row">
            <label>Bình luận</label>
                <ul>
                    @foreach ($comments as $comment)
                        <li>{{ $comment->comment }}</li>
                    @endforeach
                </ul>
            <form action="{{ route('blSee') }}" method="post">
                @csrf
                <input type="hidden" name="article_id" value="{{ $pro->id }}">
                <textarea name="comment" id="description"></textarea>
                <button type="submit">Xác nhận</button>
            </form>
        </div>
    </div>
</body>S
</html>