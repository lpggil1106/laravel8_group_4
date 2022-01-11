@extends('layouts.template')

@section('title', 'TINGS News List')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news-list.css') }}">
@endsection

@section('main')
    <!-- News 首頁 -->
    <section id="news-header">
        <h1>NEWS</h1>
        <div class="scroll"><span>SCROLL</span></div>
        <div class="content">
            <h3 class="description">
                <span>以自製香氛，</span>
                <span>開啟2022年度。</span>
                <span>讓整年度，</span>
                <span>都充滿迷人香氣。</span>
                <span>TINGS Candle 香氛•蠟燭•台中手作教室。</span>
            </h3>
            <div class="photo-full">
                <div class="top"></div>
                <div class="photo"></div>
            </div>
        </div>
        <div class="background-logo"></div>
    </section>
    
    <!-- News list -->
    <section id="news-list">
        <div class="news">
            <div class="news-item">
                <div class="date">2022.01.07</div>
                <div class="title">
                    <a href="{{ route('front.news-content') }}">一月體驗課程日期</a>
                </div>
                <div class="content">以自製香氛開啟2022年度，讓整年度都充滿迷人香氣。</div>
            </div>
            <div class="news-item">
                <div class="date">2022.01.06</div>
                <div class="title">一月香氛蠟燭體驗</div>
                <div class="content">自製香氛製品，調香體驗課程，調製專屬香氣，製成蠟燭擴香，隨心所欲表現。</div>
            </div>
            <div class="news-item">
                <div class="date">2022.01.02</div>
                <div class="title">2022的第一堂課程</div>
                <div class="content">以調香開始了嶄新的一年，調製屬於自己的香氣，讓瞬間成為永恆。</div>
            </div>
            <div class="news-item">
                <div class="date">2021.12.31</div>
                <div class="title">2021年的最後一天</div>
                <div class="content">還是跟學員們渡過，結束最後一堂課。感謝今年所有參與TINGS Candle課程的同學們，祝大家新年快樂！</div>
            </div>
            <div class="news-item">
                <div class="date">2021.12.29</div>
                <div class="title">調香體驗不只能做香水</div>
                <div class="content">也能製作擴香瓶或蠟燭，今年最後一天調製香氛，讓自己在新年煥然一新。</div>
            </div>
            <div class="news-item">
                <div class="date">2021.12.28</div>
                <div class="title">再過幾天就要迎接跨年</div>
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