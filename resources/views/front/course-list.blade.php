@extends('layouts.template2')

@section('title', 'TINGS Courses')

@section('css')
    {{-- bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- css --}}
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
                <li class="tab"><a href="">體驗課程</a></li>
                <li class="tab"><a href="">大師課程</a></li>
                <li class="tab"><a href="">證書課程</a></li>
                <li class="tab"><a href="">線上課程</a></li>
            </ul>
            <!-- cards -->
            {{-- <div class="cards">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('front.course-content') }}" class="card">
                            <div class="img" style="background-image: url(/img/candles1.jpeg);"></div>
                            <div class="text-muted">證書課程</div>
                            <div class="course-title">Hastable 甘納許甜點蠟燭</div>
                            <div class="fee-and-cart">
                                <span class="fee">$13,000</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </div>
                        </a>
                        <a href="{{ route('front.course-content') }}" class="card">
                            <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                            <div class="text-muted">酒精墨水藝術</div>
                            <div class="course-title">酒精墨水藝術用紙</div>
                            <div class="fee-and-cart">
                                <span class="fee">$4,800</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </div>
                        </a>
                        <a href="{{ route('front.course-content') }}" class="card">
                            <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                            <div class="text-muted">酒精墨水藝術</div>
                            <div class="course-title">酒精墨水藝術用紙</div>
                            <div class="fee-and-cart">
                                <span class="fee">$4,800</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </div>
                        </a>
                        <a href="{{ route('front.course-content') }}" class="card">
                            <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                            <div class="text-muted">酒精墨水藝術</div>
                            <div class="course-title">酒精墨水藝術用紙</div>
                            <div class="fee-and-cart">
                                <span class="fee">$4,800</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </div>
                        </a>
                        <a href="{{ route('front.course-content') }}" class="card">
                            <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                            <div class="text-muted">酒精墨水藝術</div>
                            <div class="course-title">酒精墨水藝術用紙</div>
                            <div class="fee-and-cart">
                                <span class="fee">$4,800</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </div>
                        </a>
                        <a href="{{ route('front.course-content') }}" class="card">
                            <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                            <div class="text-muted">酒精墨水藝術</div>
                            <div class="course-title">酒精墨水藝術用紙</div>
                            <div class="fee-and-cart">
                                <span class="fee">$4,800</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="cards">
                <div class="row">
                    <div class="col-4">
                        <a href="{{ route('front.course-content') }}" class="card" style="border: none">
                            <img src="{{ asset('/img/candles1.jpeg') }}" class="card-img-top" alt="...">
                            {{-- <div class="img" style="background-image: url(/img/candles1.jpeg);"></div> --}}
                            <div class="card-body">
                                <div class="text-muted">證書課程</div>
                                <h5 class="card-title">Hastable 甘納許甜點蠟燭</h5>
                                <div class="fee-and-cart">
                                    <span class="fee">$13,000</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('front.course-content') }}" class="card" style="border: none">
                            <img src="{{ asset('/img/candles1.jpeg') }}" class="card-img-top" alt="...">
                            {{-- <div class="img" style="background-image: url(/img/candles1.jpeg);"></div> --}}
                            <div class="card-body">
                                <div class="text-muted">證書課程</div>
                                <h5 class="card-title">Hastable 甘納許甜點蠟燭</h5>
                                <div class="fee-and-cart">
                                    <span class="fee">$13,000</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('front.course-content') }}" class="card" style="border: none">
                            <img src="{{ asset('/img/candles1.jpeg') }}" class="card-img-top" alt="...">
                            {{-- <div class="img" style="background-image: url(/img/candles1.jpeg);"></div> --}}
                            <div class="card-body">
                                <div class="text-muted">證書課程</div>
                                <h5 class="card-title">Hastable 甘納許甜點蠟燭</h5>
                                <div class="fee-and-cart">
                                    <span class="fee">$13,000</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('front.course-content') }}" class="card" style="border: none">
                            <img src="{{ asset('/img/candles1.jpeg') }}" class="card-img-top" alt="...">
                            {{-- <div class="img" style="background-image: url(/img/candles1.jpeg);"></div> --}}
                            <div class="card-body">
                                <div class="text-muted">證書課程</div>
                                <h5 class="card-title">Hastable 甘納許甜點蠟燭</h5>
                                <div class="fee-and-cart">
                                    <span class="fee">$13,000</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('front.course-content') }}" class="card" style="border: none">
                            <img src="{{ asset('/img/candles1.jpeg') }}" class="card-img-top" alt="...">
                            {{-- <div class="img" style="background-image: url(/img/candles1.jpeg);"></div> --}}
                            <div class="card-body">
                                <div class="text-muted">證書課程</div>
                                <h5 class="card-title">Hastable 甘納許甜點蠟燭</h5>
                                <div class="fee-and-cart">
                                    <span class="fee">$13,000</span>
                                    <i class="fas fa-shopping-cart icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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
