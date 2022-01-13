@extends('layouts.template')

@section('title', 'TINGS Aroma')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('main')
    <!-- home -->
    <section id="home">
        <!-- imgs -->
        <div class="imgs">
            <div class="left">
                <div class="img">
                </div>
                <div class="texts">
                    <div class="big-text">TINGS</div>
                    <div class="small-texts">
                        <span>Warm</span>
                        <span>Scented</span>
                        <span>Handmade</span>
                    </div>
                    <div class="scroll-to-discover">
                        <span><i class="fas fa-chevron-down icon"></i> Scroll to Discover</span>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="top-img"></div>
                <div class="bottom-img"></div>
            </div>
        </div>
    </section>
    <!-- site content -->
    <div class="site-content">
        <!-- about us -->
        <section id="about-us">
            <div class="container">
                <div class="left-img"></div>
                <div class="about-us">
                    <div class="right-container">
                        <h2>About Us</h2>
                        <div class="intro">
                            <div class="title">介紹</div>
                            <div class="content">
                                <span>因中英韓口譯工作而接觸到手作香氛蠟燭，</span>
                                <span>目前與各領域韓師合作將課程引進台灣並進行各類師資培訓課程。</span>
                            </div>
                        </div>
                        <div class="services">
                            <div class="title">服務項目</div>
                            <div class="content">
                                <span>蠟燭實作課程</span>
                                <span>師資證書培訓課程</span>
                                <span>蠟燭用品材料販售</span>
                            </div>
                        </div>
                        <div class="skills">
                            <div class="title">資歷</div>
                            <div class="content">
                                <span><span class="english">HASTABLE</span> 台灣唯一合作教室</span>
                                <span><span class="english">HASTABLE Master Class</span> 大師課程師資</span>
                                <span><span class="english">HASTABLE</span> 甘納許甜點蠟燭 <span
                                        class="english">Level</span>
                                    <span class="numbers">1+2</span>
                                    師資</span>
                                <span><span class="english">KCCA</span> 韓國蠟燭工藝協會香氛蠟燭證書師資</span>
                                <span>韓國 <span class="english">PROLEADER</span> 協會 天然保養品手工皂證書</span>
                                <span><span class="english">KNDA</span> 韓國天然設計協會 大豆蠟裱花/<span
                                        class="english">Soy
                                        P</span>/蜜蠟花證書師資</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-img"></div>
                </div>
            </div>
        </section>
        {{-- course --}}
        <section id="courses">
            <div class="container">
                <div class="course-info">
                    <div class="block">
                        Courses
                    </div>
                    <div class="course">
                        <div class="course-content">
                            <div class="course-title">
                                <span class="english">Hastable</span> 甘納許甜點蠟燭證書課程
                            </div>
                            <div class="course-texts">
                                <span style="margin-bottom: 1.5rem;">此課程整合甘納許經典技法、集結麵包/蛋糕發泡技法，無論放多久都能切片。</span>
                                <span>自製巧克力裝飾也是課程中重要的技法，另外包含了真實甜點會用到的裝飾技巧，是市面上內容最豐富的甜點蠟燭證書課程。</span>
                            </div>
                            <div class="course-fee">實體課程費用: $<span class="numbers">13,000</span> / <span
                                    class="numbers">2</span>天
                            </div>
                            <a href="" class="add-to-cart">
                                <span>加入購物車</span>
                                <i class="fas fa-cart-plus icon"></i>
                            </a>
                        </div>
                        <div class="column-container">
                            <div class="course-img"></div>
                            <a href="{{ route('front.course-list') }}" class="learn-more">
                                Learn more
                                <i class="fas fa-chevron-right icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="banner"></div> --}}
        <!-- course -->
        {{-- <section id="course">
            <div class="course-title">
                <span>Courses</span>
            </div>
            <div class="course-info-end">
                <div class="course-info">
                    <div class="course-content">
                        <h2><span>Hastable</span>甘納許甜點蠟燭證書課程</h2>
                        <p>此課程整合甘納許經典技法、集結麵包/蛋糕發泡技法，無論放多久都能切片。</p>
                        <p>自製巧克力裝飾也是課程中重要的技法，另外包含了真實甜點會用到的裝飾技巧，是市面上內容最豐富的甜點蠟燭證書課程。</p>
                        <p>實體課程費用:<span>$13,000</span> / 2天</p>
                        <a href="#">加入購物車 <i class="fas fa-cart-plus icon"></i></a>
                    </div>
                    <div class="course-img">
                        <div class="course-image"></div>
                        <div class="link">
                            <a href="{{ route('front.course-list') }}">
                            Learn more
                            <i class="fas fa-chevron-right icon"></i>
                        </a></div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- shop -->
        <section id="shop">
            <div class="shop">
                <div class="left">
                    <div class="gray">
                        {{-- <h2>Shop</h2> --}}
                    </div>
                </div>
                <div class="right">
                    <div class="right-center">
                        <div class="title">
                            <h2>Shop</h2>
                        </div>
                        <div class="shopping-items">
                            <div class="shopping-item">
                                <div class="img"
                                    style="background-image: url({{ asset('img/shop-item1.jpeg') }})" alt="shopping item">
                                </div>
                                {{-- <img src="{{ asset('img/shop-item-01.jpg') }}" alt="shopping item"> --}}
                                <h3>經典紓壓香氛蠟燭</h3>
                            </div>
                            <div class="shopping-item">
                                <div class="img"
                                    style="background-image: url({{ asset('img/shop-item2.jpeg') }})" alt="shopping item">
                                </div>
                                {{-- <img src="{{ asset('img/shop-item-02.jpg') }}" alt="shopping item"> --}}
                                <h3>純白簡約柱狀蠟燭禮盒</h3>
                            </div>
                            <div class="shopping-item">
                                <div class="img"
                                    style="background-image: url({{ asset('img/shop-item3-1.jpeg') }})"
                                    alt="shopping item">
                                </div>
                                {{-- <img src="{{ asset('img/shop-item-03.jpg') }}" alt="shopping item"> --}}
                                <h3>金屬質感香氛小茶蠟4入組</h3>
                            </div>
                            <div class="shopping-item">
                                <div class="img"
                                    style="background-image: url({{ asset('img/shop-item4.jpeg') }})" alt="shopping item">
                                </div>
                                {{-- <img src="{{ asset('img/shop-item-04.jpg') }}" alt="shopping item"> --}}
                                <h3>酒精墨水藝術材料包</h3>
                            </div>
                        </div>
                    </div>
                    <div class="right-left">
                        <div class="link">
                            <a href="{{ route('front.shop-list') }}">View all<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="title">
            <h2>Shop</h2>
        </div> --}}
            {{-- <div class="shop">
            <div>
                <span><i class="fas fa-chevron-left"></i></span>
                <span><i class="fas fa-chevron-right"></i></span>
            </div>
        </div> --}}
        </section>
        <!-- blog -->
        <section id="blog">
            <div class="left">
                <div class="img"></div>
            </div>
            <div class="right">
                <div class="news">News</div>
                <div class="article">
                    <div>
                        <span>2021.12.31</span>
                        <h2>2021年的最後一天</h2>
                        {{-- <p>白日依山盡，黃河入海流，欲窮千里目，更上一層樓</p> --}}
                    </div>
                    <div>
                        <span>2021.12.29</span>
                        <h2>調香體驗不只能做香水</h2>
                        {{-- <p>哎呀~早上的早餐真是可口，像極了香水，香噴噴的氣息，勾引者我身上每個細胞，雙手抓住漢堡，大力地咬一口，啊哈!就是這個滋味！</p> --}}
                    </div>
                    <div>
                        <span>2021.12.26</span>
                        <h2>再過幾天就要迎接過年</h2>
                        {{-- <p>千門明月，
                    天如水，正是人間佳節。
                    開盡小梅春氣透，花燭家家羅列。
                    來往綺羅，喧闐簫鼓，達旦何曾歇。
                    少年當此，風光真是殊絕。
                </p> --}}
                    </div>
                    <a href="">View all<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')

@endsection
