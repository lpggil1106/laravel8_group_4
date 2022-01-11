@extends('layouts.template')

@section('title', 'TINGS News Content')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/news-content.css')}}">
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
    
    <!-- News content -->
    <section id="news-content">
        <div class="news">
            <div class="title">2021年的最後一天</div>
            <div class="date">2021.12.31</div>
            <div class="content">
                <p>2021年的最後一天，還是跟學員們渡過，結束最後一堂課。</p>
                <p>感謝今年所有參與TINGS Candle課程的同學們，祝大家新年快樂！</p>
                <p>新年假期一樣，跟大家一起過。</p>
                <p>※市集活動：台北捷運中山站R9出口@心中山線型公園1/1（六），1/2（日）12:00-20:00</p>
                <p>＊小容量香氛蠟燭新登場，歡迎直接現場聞香選購。</p>
                <p>※台中體驗課程：香氛製品調香體驗1/2 （日）上午10:00</p>
                <p>＊其他課程預約請私訊詢問。</p>
            </div>
        <div class="button">
            <a class="prev">Prev</a>
            <a class="back-to-list">Back to list</a>
            <a class="next">Next</a>
        </div>
    </section>
@endsection

@section('js')
    
@endsection