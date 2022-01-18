@extends('layouts.template2')

@section('title', 'TINGS Courses')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/course-list.css') }}">
@endsection

@section('main')
    <div id="course-list">
        <div class="section1">
            <div class="title">
                <span>課程</span>
                <div class="english">Courses</div>
            </div>
            <div class="image">
                <div class="banner"></div>
                <div class="small-img"></div>
            </div>
        </div>
        <!-- course -->
        <div class="course">
            <ul class="tabs">

                <a href="{{route('front.course-list','category_id=0')}}" class="tab">所有</a>
                @foreach ($courseCategories as $courseCategory)
                    <a href="{{route('front.course-list','category_id='.$courseCategory->id)}}" class="tab">{{$courseCategory->name}}</a>
                @endforeach
                {{-- <li class="tab"><a href="">體驗課程</a></li>
                <li class="tab"><a href="">大師課程</a></li>
                <li class="tab"><a href="">證書課程</a></li>
                <li class="tab"><a href="">線上課程</a></li> --}}
            </ul>
            <!-- cards -->
            <div class="cards">
                <div class="row">
                    <div class="col">
                        @foreach ($products as $product )
                        <a href="{{route('front.course-content',['id' => $product->id])}}" class="card">
                            <div class="img" style="background-image: url(/img/candles1.jpeg);"></div>
                            <div class="text-muted">證書課程</div>
                            <div class="course-title">Hastable 甘納許甜點蠟燭</div>
                            <div class="fee-and-cart">
                                <span class="fee">$13,000</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="course-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="course-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="course-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="course-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="course-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div>
            <div class="card">
                <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                <div class="text-muted">酒精墨水藝術</div>
                <div class="course-title">酒精墨水藝術用紙</div>
                <div class="fee-and-cart">
                    <span class="fee">$4,800</span>
                    <i class="fas fa-cart-plus icon"></i>
                </div>
            </div> --}}
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
