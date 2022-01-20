@extends('layouts.template')

@section('title', 'TINGS Aroma')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.css" integrity="sha512-fSWkjL6trYj6KvdwIga30e8V4h9dgeLxTF2q2waiwwafEXD+GXo5LmPw7jmrSDqRun9gW5KBR+DjvWD+5TVr8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="left-img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500"></div>
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
                    <div class="right-img" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    </div>
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
                                <span>此課程整合甘納許經典技法、集結麵包/蛋糕發泡技法，無論放多久都能切片。</span>
                                <span>自製巧克力裝飾也是課程中重要的技法，另外包含了真實甜點會用到的裝飾技巧，是市面上內容最豐富的甜點蠟燭證書課程。</span>
                            </div>
                            <div class="course-fee">實體課程費用: $<span class="numbers">13,000</span> / <span
                                    class="numbers">2</span>天
                            </div>
                            <button data-id='9' href="" class="add-to-cart">
                                <span>加入購物車</span>
                                <i class="fas fa-shopping-cart icon"></i>
                            </button>
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
        <!-- news -->
        <section id="news">
            <div class="left">
                <div class="img" data-aos="fade-right" data-aos-duration="1500"></div>
            </div>
            <div class="right">
                <div class="news">News</div>
                <div class="article">
                    @foreach ($news as $item)
                    <div>
                        <span>{{$item->date}}</span>
                        <h2>
                            <a href="/news/{{$item->id}}">
                                {{$item->title}}
                            </a>
                        </h2>
                    </div>
                    @endforeach
                    <a class="news-link" href="{{ route('front.news-list') }}">View all<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.4/sweetalert2.min.js" integrity="sha512-GDiDlK2vvO6nYcNorLUit0DSRvcfd7Vc0VRg7e3PuZcsTwQrJQKp5hf8bCaad+BNoBq7YMH6QwWLPQO3Xln0og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    @if (session('message'))
        Swal.fire({
            icon: 'error',
            title: '{{session('message')}}',
        })
    @endif
    const addCartElement = document.querySelector('.add-to-cart');
            addCartElement.addEventListener('click',function () {
                let productId = this.getAttribute('data-id');
                let formData = new FormData();
                formData.append('_token','{{csrf_token()}}');
                formData.append('id',productId);
                let url = '{{route('shopping-cart.add')}}';
                fetch(url,{
                    'method':'post',
                    'body':formData
                }).then(function (response) {
                    return response.text();
                }).then(function (data) {
                    if(data == 'success'){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: '成功加入購物車!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
            });
</script>

@endsection
