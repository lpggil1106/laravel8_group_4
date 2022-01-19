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
            <div class="scroll-2">Scroll</div>
            <div class="background-logo"></div>
        </div>
    </section>

    <!-- News list -->
    <section id="news-list">
        @foreach ($news as $item)
        <div class="news">
            <div class="news-item">
                <div class="date">{{$item->date}}</div>
                <a class="title" href="/news/{{$item->id}}">
                    {{$item->title}}
                </a>
                <div class="content ellipsis2">{{ Str::limit($item->content, 120, $end = '...') }}</div>
            </div>
        </div>
        @endforeach
        <div class="button">
            <a class="btn1">1</a>
            <a class="btn2">2</a>
            <a class="btn-next">Next</a>
        </div>
    </section>
@endsection

@section('js')

@endsection
