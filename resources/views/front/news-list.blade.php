@extends('layouts.template2')

@section('title', 'TINGS News List')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news-list.css') }}">
@endsection

@section('main')
    <!-- News 首頁 -->
    <section id="news-header">
        <div class="nav"></div>
        <div class="container">
            <h1>News</h1>
            <div class="content">
                <h3 class="description">
                    <span>以自製香氛，</span>
                    <span>開啟 <span class="numbers">2022</span> 年度。</span>
                    <span>讓整個年度，</span>
                    <span>充滿迷人香氣。</span>
                    <span><span class="english">TINGS Aroma</span> 香氛 • 蠟燭 • 台中手作教室。</span>
                    <span class="scroll">Scroll</span>
                </h3>
                <div class="photo-full">
                    <div class="top"></div>
                    <div class="photo"></div>
                </div>
            </div>
            <div class="background-logo"></div>
        </div>
    </section>

    <!-- News list -->
    <section id="news-list">
        <div class="news">
            <div class="news-item">
                <div class="date">2022.01.07</div>
                <a class="title" href="{{ route('front.news-content') }}">
                    一月體驗課程日期
                </a>
                <div class="content">以自製香氛開啟 2022 年度，讓整年度都充滿迷人香氣。</div>
            </div>
            <div class="news-item">
                <div class="date">2022.01.06</div>
                <a class="title" href="{{ route('front.news-content') }}">
                    一月香氛蠟燭體驗
                </a>
                <div class="content">自製香氛製品，調香體驗課程，調製專屬香氣，製成蠟燭擴香，隨心所欲表現。</div>
            </div>
            <div class="news-item">
                <div class="date">2022.01.02</div>
                <a class="title" href="{{ route('front.news-content') }}">
                    2022 的第一堂課程
                </a>
                <div class="content">以調香開始了嶄新的一年，調製屬於自己的香氣，讓瞬間成為永恆。</div>
            </div>
            <div class="news-item">
                <div class="date">2021.12.31</div>
                <a class="title" href="{{ route('front.news-content') }}">
                    2021 年的最後一天
                </a>
                <div class="content">跟學員們渡過，結束最後一堂課。感謝今年所有參與 TINGS Candle 課程的同學們，祝大家新年快樂！</div>
            </div>
            <div class="news-item">
                <div class="date">2021.12.29</div>
                <a class="title" href="{{ route('front.news-content') }}">
                    調香體驗不只能做香水
                </a>
                <div class="content">也能製作擴香瓶或蠟燭，今年最後一天調製香氛，讓自己在新年煥然一新。</div>
            </div>
            <div class="news-item">
                <div class="date">2021.12.28</div>
                <a class="title" href="{{ route('front.news-content') }}">
                    再過幾天就要迎接跨年
                </a>
                <div class="content">在今年的最後一天一起，製作香氛蠟燭迎接新年。課程日期：12/31（五）上午10:00。</div>
            </div>
        </div>
        <div class="button">
            <a class="btn1">1</a>
            <a class="btn2">2</a>
            <a class="btn-next">Next</a>
        </div>
    </section>
@endsection

@section('js')

@endsection
