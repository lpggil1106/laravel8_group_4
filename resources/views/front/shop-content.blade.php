@extends('layouts.template2')

@section('title', 'TINGS Shop')

@section('css')
    <!-- swiper CSS cdn  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/shop-content.css') }}">
    <style>
        .add-cart{
            width: 31%;
        }
    </style>
@endsection

@section('main')
    <section id="shop-items">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($images as $item)
                <div class="swiper-slide img" style="background-image: url({{Storage::url($item->image_url)}})"></div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="shop">
            <div>
                <span class="shop-category">{{$course->productCategories->name}}</span>
                <h3>{{$course->name}}</h3>
                <h2>金屬質感香氛小茶蠟4入組</h2>
                <span class="shop-description">
                    <span>{!!$course->content!!}</span>
                </span>
                <form action="" class="scents">
                    {{-- <label for="scents" class="scents-label">選擇香味</label> --}}
                    {{-- <select name="scents" id="scents">
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
                    <input type="submit" value="Submit"> --}}
                </form>
                <div class="price">${{$course->price}} </div>
                <button data-id='{{$course->id}}' class='add-cart'>加入購物車 <i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <div class="img-middle" style="background-image: url({{Storage::url($course->image_url)}})">
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
                            {!!$course->block1!!}
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
                            {!!$course->block2!!}
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
                            {!!$course->block3!!}
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
                                    <h3>Vincent • 5 小時前</h3>
                                    <p>超喜歡無花果的味道！</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="" alt="">
                                <div>
                                    <h3>Gemma • 10 小時前</h3>
                                    <p>客服態度很好！蠟燭也很香！</p>
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

        const addCartElement = document.querySelector('.add-cart');
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
