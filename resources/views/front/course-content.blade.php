@extends('layouts.template2')

@section('title', 'TINGS Courses')

@section('css')
    <!-- swiper CSS cdn  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/course-content.css') }}">
@endsection

@section('main')
    <section id="course-items">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($images as $item)
                <div class="swiper-slide img" style="background-image: url({{Storage::url($item->image_url)}})"></div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="course">
            <div>
                <span class="course-category">{{$course->productCategories->name}}</span>
                <h3>HAS Cake Candle</h3>
                <h2>{{$course->name}}</h2>
                <span class="course-description">
                    <span>{!!$course->content!!}</span>
                </span>
                <div class="price">$ {{$course->price}}</div>
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
                        <div class="content-01">
                            {!!$course->block1!!}
                            {{-- <p>預計課程時長 <span>2天</span> </p>
                            <p>預計單元數 <span>2天</span> </p>
                            <p>目前購買數 <span>3</span> 位同學</p>
                            <p>預計作品數 <span>4</span> 個作品</p>
                            <p>課程結束後可申請電子證書。</p> --}}
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
                            {!!$course->block2!!}
                            {{-- <p>此課程整合甘納許 1 與 2 的經典技法，集結麵包 / 蛋糕發泡技法，無論放多久都還能切片。</p>
                            <p>自製巧克力裝飾也是課程中很重要的技法，另外包含了真實甜點會用到的裝飾技巧，是市面上內容最豐富的甜點蠟燭證書課程。</p> --}}
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
                            {!!$course->block3!!}
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
