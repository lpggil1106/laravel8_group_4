@extends('layouts.template2')

@section('title', 'TINGS Courses')

@section('css')
    <!-- swiper CSS cdn  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/course-content.css') }}">
@endsection

@section('main')
    <section id="shop-items">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide img" style="background-image: url({{ asset('img/cake-garnish.jpeg') }})"></div>
                <div class="swiper-slide img" style="background-image: url({{ asset('img/cake-garnish2.jpeg') }})"></div>
                <div class="swiper-slide img" style="background-image: url({{ asset('img/cake-garnish3.jpeg') }})"></div>
                <div class="swiper-slide img" style="background-image: url({{ asset('img/cake-garnish4.jpeg') }})"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="course">
            <div>
                <span class="course-category">證書課程</span>
                <h3>HAS Cake Candle</h3>
                <h2>蛋糕蠟燭證書課程</h2>
                <span class="course-description">
                    <span>奶油製作與活用方式</span>
                    <span>巧克力裝飾及擬真水果製作</span>
                    <span>蛋糕蠟燭元素 (蛋糕體、糖煮水果、香草籽、糖粉、淋面等)</span>
                    <span>蛋糕蠟燭設計與組合 (各種奶油擠法與裝飾)</span>
                </span>
                <div class="price">$ 13,000</div>
                <button>加入購物車 <i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <div class="img-middle" style="background-image: url({{ asset('img/garnish.jpeg') }})">
            {{-- <img src="{{ asset('img/garnish.jpeg') }}" alt="middle-image"> --}}
        </div>
    </section>
    <section id="about">
        <div class="tags">
            <div class="tag active">關於課程</div>
            <div class="tag">課程簡介</div>
            <div class="tag">課程內容</div>
            <div class="tag">留言發問</div>
        </div>
        <div id="content1" class="contents active">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">課程說明</div>
                    <div class="content-title-main">Information</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class=" ontent-01">
                            <p>預計課程時長 <span>2天</span> </p>
                            <p>預計單元數 <span>2天</span> </p>
                            <p>目前購買數 <span>3</span> 位同學</p>
                            <p>預計作品數 <span>4</span> 個作品</p>
                            <p>課程結束後可申請電子證書。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content2" class="contents">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">課程簡介</div>
                    <div class="content-title-main">Introduction</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class="content-02">
                            <p>此課程整合甘納許 1 與 2 的經典技法，集結麵包 / 蛋糕發泡技法，無論放多久都還能切片。</p>
                            <p>自製巧克力裝飾也是課程中很重要的技法，另外包含了真實甜點會用到的裝飾技巧，是市面上內容最豐富的甜點蠟燭證書課程。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content3" class="contents">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">課程內容</div>
                    <div class="content-title-main">Content</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class="content-03">
                            <p>1 奶油泡芙</p>
                            <p>2 鬆餅</p>
                            <p>3 淋面蛋糕</p>
                            <p>4 蛋糕自創作</p>
                            <p>5 巧克力裝飾</p>
                            <p>6 巧克力捲 Slim Twist / 巧克力片 Slim Flat / 雙色捲心</p>
                            <p>7 巧克力 Roly Poly</p>
                            <p>8 其他裝飾技巧</p>
                            <p>9 奶油 / 糖漿 / 糖粉</p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content4" class="contents">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">留言發問</div>
                    <div class="content-title-main">Q&A</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class="content-04">
                            <div class="card">
                                <img src="" alt="">
                                <div>
                                    <h3>Eve Yao • 9 小時前</h3>
                                    <p>您好，希望材料容易購買，若不易買的，希望能在講義或課堂中說明何處可買得到。</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" alt="">
                                <div>
                                    <h3>Steven Yao • 30 分鐘前</h3>
                                    <p>您好，請問現在報名還來得及嗎？</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <!-- swiper JS cdn  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            // centeredSlides: true,
            effect: "fade",
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        const tagElements = document.querySelectorAll('.tag');
        const contentElements = document.querySelectorAll('.contents')
        tagElements.forEach(function(tagElement, index) {
            tagElement.addEventListener('click', function() {
                document.querySelector('.tag.active').classList.remove('active');
                tagElement.classList.add('active');
                document.querySelector('.contents.active').classList.remove('active');
                contentElements[index].classList.add('active');
            })
        })
    </script>
@endsection
