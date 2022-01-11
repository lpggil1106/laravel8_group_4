<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <!-- swiper css cdn  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- fontawesome cdn  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- shop core  -->
    <link rel="stylesheet" href="{{asset('css/course-content.css')}}">
</head>
<body>
    <main>
         <section id="shop-items"> 
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="{{asset('img/swiper1.jpg')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('img/swiper2.jpg')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('img/swiper3.jpg')}}" alt=""></div>
                  <div class="swiper-slide"><img src=".{{asset('img/swiper4.jpg')}}" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="course">
                <div>
                    <span>證書課程</span>
                    <h3>Hestable</h3>
                    <h2>甘納許甜點蠟燭</h2>
                    <p>甘納許甜點蠟燭甘納許甜點蠟燭<br>
                        甘納許甜點蠟燭甘納許甜點蠟燭甘納許甜點蠟燭甘<br>
                        甘納許甜點蠟燭甘納許甜點蠟燭甘納許甜點蠟燭甘納許甜點蠟燭
                    </p>
                    <div class="price">$13000</div>
                    <button >加入購物車 <i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="img-middle">
                <img src="{{asset('img/mid-img.jpg')}}" alt="middle-image">
            </div>
        </section> 
        <section id="about">
            <div class="tags">
                <div class="tag  active">關於課程</div>
                <div class="tag">課程簡介</div>
                <div class="tag">課程內容</div>
                <div class="tag">留言發問</div>
            </div>
            <div id="content1" class="contents active">
                <div  class="content">
                    <div class="content_title">
                        <div class="content_title_sub">お知らせ</div>
                        <div class="content_title_main">NEWS</div>
                    </div>
                    <div class="content_items">
                        <div class="content_item">
                            <div class=" content-01">
                                <p>預計課程時長 <span>2天</span></p>
                                <p>預計單元數 <span>2天</span></p>
                                <p>目前購買數 <span>3</span>位同學</p>
                                <p>預計作品數 <span>4</span>個作品</p>
                                <p>課程結束後可申請電子證書。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content2" class="contents">
                <div class="content ">
                    <div class="content_title">
                        <div class="content_title_sub">課程簡介</div>
                        <div class="content_title_main">Introdution</div>
                    </div>
                    <div class="content_items">
                        <div class="content_item">
                            <div class=" content-02">
                                <h3>甘納許，Garnish裝飾。</h3>
                                <p>此課程整合甘納許1與2的經典技法，集結麵包/蛋糕發泡技法，無論放多久都還能切片。</p>
                                <p>自製巧克力裝飾也是課程中很重要的技法，另外包含了真實甜點會用到的裝飾技巧。</p>
                                <p>是市面上內容最豐富的甜點蠟燭證書課程。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content3" class="contents">
                <div class="content ">
                    <div class="content_title">
                        <div class="content_title_sub">課程內容</div>
                        <div class="content_title_main">Content</div>
                    </div>
                    <div class="content_items">
                        <div class="content_item">
                            <div class=" content-03">
                                <p>01奶油泡芙</p>
                                <p>02鬆餅</p>
                                <p>03淋面蛋糕</p>
                                <p>04蛋糕自創作</p>
                                <p>＊巧克力裝飾</p>
                                <p>巧克力捲Slim Twist / 巧克力片Slim Flat / 雙色捲心</p>
                                <p>巧克力 Roly Poly</p>
                                <p>＊其他裝飾技巧</p>
                                <p>奶油 / 糖漿 / 糖粉</p>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content4" class="contents">
                <div class="content ">
                    <div class="content_title">
                        <div class="content_title_sub">留言提問</div>
                        <div class="content_title_main">Q&A</div>
                    </div>
                    <div class="content_items">
                        <div class="content_item">
                            <div class=" content-04">
                                <div class="card">
                                    <img src="{{asset('img/swiper5.jpg')}}" alt="">
                                    <div>
                                        <h3>Eve Yao‧9小時</h3>
                                        <p>您好，希望材料容易購買，若不易買的，希望能在講義或課堂中說明何處可買得到。</p>
                                    </div>
                                </div> 
                                <div class="card">
                                    <img src="{{asset('img/swiper5.jpg')}}" alt="">
                                    <div>
                                        <h3>Eve Yao‧9小時</h3>
                                        <p>您好，希望材料容易購買，若不易買的，希望能在講義或課堂中說明何處可買得到。</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="{{asset('img/swiper5.jpg')}}" alt="">
                                    <div>
                                        <h3>Eve Yao‧9小時</h3>
                                        <p>您好，希望材料容易購買，若不易買的，希望能在講義或課堂中說明何處可買得到。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- swiper js cdn  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
      <script>
        const tagElements = document.querySelectorAll('.tag');
        const contentElements = document.querySelectorAll('.contents')
        tagElements.forEach(function(tagElement,index){
            tagElement.addEventListener('click',function(){
                document.querySelector('.tag.active').classList.remove('active');
                tagElement.classList.add('active');
                document.querySelector('.contents.active').classList.remove('active');
                contentElements[index].classList.add('active');
            })
        })
      </script>
</body>
</html>