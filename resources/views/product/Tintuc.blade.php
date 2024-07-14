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
            <!-- phần tin tức -->
            <div class="news_technology">
                <div class="title_news_technology">
                    <h6>TIN CÔNG NGHỆ</h6>
                </div>
                @foreach($news as $item)
                <div class="contents_news_technology">
                    <div class="element_new">
                        <div class="img_contents_news_technology">
                            <a href="{{  route('tintuc', ['id' => $item -> id ])  }}">
                                <img id="img_tintuc_col1" src="/FileImage/news/{{ $item->avatar }}" alt="" />
                            </a>
                        </div>
                        <div class="text_contents_news_technology">
                            <a href="{{  route('tintuc', ['id' => $item -> id ])  }}">
                                <h2 style="font-size: 1.25rem; margin: 0; color: black;">
                                    {{ $item->title }}
                                </h2>
                            </a>
                            <h4 style="font-weight: 300;">
                                {{ $item->content_title }}
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
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