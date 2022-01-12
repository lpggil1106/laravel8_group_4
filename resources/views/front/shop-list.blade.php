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
        <div class="banner"></div>
    </div>
    <div class="small-img"></div>
    <!-- shop list -->
    <div class="shop-list">
        <ul class="tabs">
            <li class="tab"><a href="">酒精墨水藝術</a></li>
            <li class="tab"><a href="">手工香氛蠟燭</a></li>
        </ul>
        <!-- cards -->
        <div class="cards">
            <div class="card">
                <div class="img" style="background-image: url(/img/candles1.jpeg);"></div>
                <div class="text-muted">證書課程</div>
                <div class="shop-title">Hastable 甘納許甜點蠟燭</div>
                <div class="fee-and-cart">
                    <span class="fee">$13,000</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="shop-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
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
