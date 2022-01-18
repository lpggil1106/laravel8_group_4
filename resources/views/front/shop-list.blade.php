@extends('layouts.template2')

@section('title', 'TINGS Shop')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop-list.css') }}">
@endsection

@section('main')
    <div id="shop-list">
        <div class="section1">
            <div class="title">
                <span>商店</span>
                <div class="english">Shop</div>
            </div>
            <div class="image">
                <div class="banner"></div>
                <div class="small-img"></div>
            </div>
        </div>
        <!-- shop -->
        <div class="shop-list">
            <ul class="tabs">
                <li class="tab"><a href="">酒精墨水藝術</a></li>
                <li class="tab"><a href="">手工香氛蠟燭</a></li>
            </ul>
            <!-- cards -->
            <div class="cards">
                <a href="{{ route('front.shop-content') }}" class="card">
                    <div class="img" style="background-image: url(/img/shop-item1.jpeg);"></div>
                    <div class="text-muted">證書課程</div>
                    <div class="shop-title">Hastable 甘納許甜點蠟燭</div>
                    <div class="fee-and-cart">
                        <span class="fee">$13,000</span>
                        <i class="fas fa-shopping-cart icon"></i>
                    </div>
                </a>
                <a href="{{ route('front.shop-content') }}" class="card">
                    <div class="img" style="background-image: url(/img/shop-item2.jpeg);"></div>
                    <div class="text-muted">酒精墨水藝術</div>
                    <div class="shop-title">酒精墨水藝術用紙</div>
                    <div class="fee-and-cart">
                        <span class="fee">$4,800</span>
                        <i class="fas fa-shopping-cart icon"></i>
                    </div>
                </a>
                <a href="{{ route('front.shop-content') }}" class="card">
                    <div class="img" style="background-image: url(/img/shop-item3-1.jpeg);"></div>
                    <div class="text-muted">酒精墨水藝術</div>
                    <div class="shop-title">酒精墨水藝術用紙</div>
                    <div class="fee-and-cart">
                        <span class="fee">$4,800</span>
                        <i class="fas fa-shopping-cart icon"></i>
                    </div>
                </a>
                <a href="{{ route('front.shop-content') }}" class="card">
                <div class="img" style="background-image: url(/img/shop-item4.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-shopping-cart icon"></i>
                </div>
            </a>
            <a href="{{ route('front.shop-content') }}" class="card">
                <div class="img" style="background-image: url(/img/shop-item-paper.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">強韌耐熱 防水合成紙 A4 10張</div>
                <div class="fee-and-cart">
                    <span class="fee">$400</span>
                    <i class="fas fa-shopping-cart icon"></i>
                </div>
            </a>
            <a href="{{ route('front.shop-content') }}" class="card">
                <div class="img" style="background-image: url(/img/shop-item-04.jpg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙 強韌耐熱 防水合成紙 A4 10張</div>
                <div class="fee-and-cart">
                    <span class="fee">$400</span>
                    <i class="fas fa-shopping-cart icon"></i>
                </div>
            </a>
            <a href="{{ route('front.shop-content') }}" class="card">
                <div class="img" style="background-image: url(/img/flower.jpg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-shopping-cart icon"></i>
                </div>
            </a>
            <a href="{{ route('front.shop-content') }}" class="card">
                <div class="img" style="background-image: url(/img/bath-candle.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-shopping-cart icon"></i>
                </div>
            </a>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script>
        // hides header when scrolling down; shows header when up
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.querySelector('header').style.top = "0";
            } else {
                document.querySelector('header').style.top = "-100px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
@endsection
