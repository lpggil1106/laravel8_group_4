<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="team project">
    <meta name="author" content="Ray ma">
    <title>電腦版前端</title>
    <!-- google font  -->

    <!-- fontawesome cdn  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- css core  -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <section id="banner" ></section>
    <section id="shop">
        <div class="shop">
            <h2>Shop</h2>
            <div >
                <span><i class="fas fa-chevron-left"></i></span>
                <span><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
        <div class="gray"><h2>INSTAGRAM</h2></div>
        <div class="shopping-item">
            <div>
                <img src="{{asset('img/shop-item-01.jpg')}}" alt="shopping item">
                <h3>Hastable 甘納許甜點蠟燭證書課程</h3>
            </div>
            <div>
                <img src="{{asset('img/shop-item-02.jpg')}}" alt="shopping item">
                <h3>TINGS Candle 蜜蠟花進階課程</h3>
            </div>
            <div>
                <img src="{{asset('img/shop-item-03.jpg')}}" alt="shopping item">
                <h3>『線上影片課程』墨飾Inkazari酒精墨水畫</h3>
            </div>
            <div>
                <img src="{{asset('img/shop-item-04.jpg')}}" alt="shopping item">
                <h3>韓國SDCA捏塑石膏香氛證書課程</h3>
            </div>
        </div>
            <a href="">VIEW ALL  <i class="fas fa-arrow-right"></i></a>
    </section>
    <section id="blog">
        <div class="article">
            <div>
                <span>2021.12.31</span>
                <h2>2021年的最後一天</h2>
                <p>白日依山盡，黃河入海流，欲窮千里目，更上一層樓</p>
            </div>
            <div>
                <span>2021.12.29</span>
                <h2>調香體驗不只能做香水</h2>
                <p>哎呀~早上的早餐真是可口，像極了香水，香噴噴的氣息，勾引者我身上每個細胞，雙手抓住漢堡，大力地咬一口，啊哈!就是這個滋味!</p>
            </div>
            <div>
                <span>2021.12.26</span>
                <h2>再過幾天就要迎接過年</h2>
                <p>千門明月，
                    天如水，正是人間佳節。
                    開盡小梅春氣透，花燭家家羅列。
                    來往綺羅，喧闐簫鼓，達旦何曾歇。
                    少年當此，風光真是殊絕。
                </p>
            </div>
            <a href="">VIEW ALL  <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="new">News</div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-up">
                <div class="contact">
                    <h3>Information</h3> 
                    <h2>聯絡資訊</h2>
                    <p>0955-779-166</p>
                    <p>tingscandle@gmail.com</p>
                    <p>Line ID /@goifprby</p>
                </div>
                <div class="address">
                    <h3>Address</h3>
                    <h2>TINGS Aroma</h2>
                    <p><b>台中市西區<br>華美西街一段<br>142號1樓</b></p>
                    <br>
                    <p>tingscandle@gmail.com</p>
                </div>
                <div class="transport">
                    <h3>Transportation</h3>
                    <h2>高鐵台中站</h2>
                    <p>159高鐵臺中站-中國醫藥大學-臺中公園: 於科學博物館-植物園下車,<br>路線及時刻表請參考《高鐵快捷公車臺中站》。</p>
                    <h4>臺中火車站周圍轉乘公車</h4>
                    <p>台中客運: 11綠能街車、35、70、71、304、307、309、310、323、324、325</p>
                    <p>仁友客運: 45</p>
                    <p>統聯客運: 18、77、159、301、303、308、326</p>
                    <p>巨業交通: 300、305、306</p>
                    <p>豐榮客運: 48</p>
                    <p>中台灣客運: 37、302</p>
                    <br>
                    <p>下車站: 忠明國小或科博館</p>
                </div>
                <div class="img">
                    <img src="{{asset('img/LINE_ALBUM_IMG_220109_1.jpg')}}" alt="TINGS AROMA LOGO" title="TINGS AROMA LOGO">
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.3877053937354!2d120.6605140616589!3d24.158132084390033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d2e1730dcb5%3A0x9f1a3f6807feee9e!2sTINGS%20AROMA!5e0!3m2!1szh-TW!2stw!4v1641476021219!5m2!1szh-TW!2stw" 
                    width="465" 
                    height="260" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-mid">
                <h4>Open time</h4>
                <h3>營業時間</h3>
                <p>周一~周五:1000~1900 /週六、日:請來信留言</p>
            </div>
        </div>
        <div class="footer-down">
            <a class="top" href="#">Top <i class="fas fa-arrow-up"></i></a>
            <h3>Copyright 2022 - TINGS Aroma | 網頁設計:老師最帥對不對</h3>
            <div class="follow">
                <h4>Follow us</h4>
                <a href="https://www.facebook.com/tingscandle" title="facebook link"><i class="fab fa-facebook-square" ></i></a>
                <a href="https://www.instagram.com/tingscandle/" title="instagram link"><i class="fab fa-instagram" ></i></a>
            </div>
        </div>
    </footer>
    <script src="./js/index.js"></script>
</body>
</html>