@extends('layouts.template2')

@section('title', 'TINGS Shop')

@section('css')
    <!-- swiper CSS cdn  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/shop-content.css') }}">
@endsection

@section('main')
    <section id="shop-items">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide img" style="background-image: url({{ asset('img/shop-item3.jpeg') }})"></div>
                <div class="swiper-slide img" style="background-image: url({{ asset('img/shop-item3-2.jpeg') }})"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="shop">
            <div>
                <span class="shop-category">證書課程</span>
                <h3>手工香氛蠟燭</h3>
                <h2>金屬質感香氛小茶蠟4入組</h2>
                <span class="shop-description">
                    <span>金色鋁質感容器茶蠟</span>
                    <span>擺放於飯桌當擺飾品或點燃都能使人擁有好心情</span>
                    <span>絕對是生活中不可或缺的商品</span>
                </span>
                <form action="" class="scents">
                    <label for="scents" class="scents-label">選擇香味</label>
                    <select name="scents" id="scents">
                        <option value="lavender">薰衣草田</option>
                        <option value="meadow">阿米希草原</option>
                        <option value="orange">歐香橙花</option>
                        <option value="lemon">沁檸馬鞭草</option>
                        <option value="fig">無花果</option>
                        <option value="tangerine">富士暖烘柑橘</option>
                        <option value="oak">清新橡園</option>
                        <option value="matterhorn">馬特洪峰</option>
                        <option value="hanabi">煙燻花火</option>
                    </select>
                    {{-- <input type="submit" value="Submit"> --}}
                </form>
                <div class="price">$ 220 - $350</div>
                <button>加入購物車 <i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <div class="img-middle" style="background-image: url({{ asset('img/shop-item3-1.jpeg') }})">
            {{-- <img src="{{ asset('img/garnish.jpeg') }}" alt="middle-image"> --}}
        </div>
    </section>
    <section id="about">
        <div class="tags">
            <div class="tag active">商品介紹</div>
            <div class="tag">商品規格</div>
            <div class="tag">注意事項</div>
            <div class="tag">商品評價</div>
        </div>
        <div id="content1" class="contents active">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">香氣介紹</div>
                    <div class="content-title-main">Scents</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class="content-01">
                            <p style="margin-bottom: 0.5rem">香氣介紹</p>
                            <p>1 薰衣草田 Lavender Field / 清新調 / 佛手柑．薰衣草．迷迭香．花梨木．岩蘭草．檀香</p>
                            <p>2 阿米希草原 Amish Meadow / 清新綠茶調 / 佛手柑．檸檬．綠葉．小蒼蘭．岩蘭草．廣藿香</p>
                            <p>3 歐香橙花 Neroli / 花香調 / 檸檬．橙花．紫丁香．茉莉</p>
                            <p>4 沁檸馬鞭草 Lemon Verbena / 清新果香調 / 檸檬．馬鞭草．玫瑰．羅勒．檀香．琥珀</p>
                            <p>5 無花果 Fig / 果香調 / 無花果．綠草．薄荷．茉莉花．雪松．廣藿香</p>
                            <p>6 富士暖烘柑橘 Fuji Warm Tangerine / 柑橘東方調 / 柚子．柑橘．肉桂．檀木．木香．香脂</p>
                            <p>7 清新橡園 Morning Oak / 木質調 / 岩蘭草．苔癬．雪松．橡樹</p>
                            <p>8 馬特洪峰 Matterhorn / 馥奇調 / 佛手柑．薰衣草．迷迭香．檀香．廣藿香</p>
                            <p>9 煙燻花火 Smoky Hanabi / 乾燥木質調 / 玫瑰．丁香．廣藿香．雪松．檀香．煙燻</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content2" class="contents">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">商品規格</div>
                    <div class="content-title-main">Details</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class="content-02">
                            <p>成分：天然大豆蠟</p>
                            <p>容器材質：鋁</p>
                            <p>容器尺寸 (直徑 x 高)：4cm x 1.7cm</p>
                            <p>容量：15ml</p>
                            <p>燃燒時間：約 4 小時</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content3" class="contents">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">注意事項</div>
                    <div class="content-title-main">Notice</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class="content-03">
                            <p>請不要以口吹熄蠟燭，熄滅蠟燭時請將燭芯浸至蠟液中再重新豎立，減少黑色煙霧產生。</p>
                            <p>點然蠟燭前，請先修整燭芯至 0.5 公分左右。</p>
                            <p>點燃後至少要等到表面完全融化變成液體後再吹熄。</p>
                            <p>若只燃燒幾分鐘就熄滅，容易造成蠟燭只燒到中間一小圈，無法完全融化。</p>
                            <p>請不要以口吹熄蠟燭，熄滅蠟燭時請將燭芯浸至蠟液中再重新豎立，減少黑色煙霧產生。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content4" class="contents">
            <div class="content">
                <div class="content-title">
                    <div class="content-title-sub">商品評價</div>
                    <div class="content-title-main">Review</div>
                </div>
                <div class="content-items">
                    <div class="content-item">
                        <div class="content-04">
                            <div class="card">
                                <img src="" alt="">
                                <div>
                                    <h3>Ray Ma • 5 小時前</h3>
                                    <p>超喜歡無花果的味道！</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" alt="">
                                <div>
                                    <h3>Kevin Yao • 10 小時前</h3>
                                    <p>客服態度很好！蠟燭也很香，天然的那種！</p>
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