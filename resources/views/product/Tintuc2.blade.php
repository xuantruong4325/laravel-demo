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
        <div class="silder_bt_tintuc">
            <div class="silder_ct_tintuc">
                <div class="title_cttt">
                    <h2 style="font-size: 25px;">
                        {{ $news->title }}
                    </h2>
                </div>
                <div class="noidung_cttt">
                    {!! $news->content !!}
                </div>
                <hr />
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