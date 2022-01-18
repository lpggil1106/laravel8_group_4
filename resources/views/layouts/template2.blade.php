{{-- 前台頁面 --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" width='500'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('css')
</head>

<body>
    <!-- header -->
    <header id="header">
        <a href="{{ route('front.index') }}" class="logo">
            <img src="/img/logo.png" alt="">
        </a>
        <ul class="navbar-middle">
            <li><a href="{{ route('front.course-list') }}" class="nav-item middle-nav">Courses</a></li>
            <li><a href="{{ route('front.shop-list') }}" class="nav-item middle-nav">Shop</a></li>
            <li><a href="{{ route('front.news-list') }}" class="nav-item middle-nav">News</a></li>
            <li><a href="{{ route('front.notice') }}" class="nav-item middle-nav">Notice</a></li>
        </ul>
        <ul class="navbar-right">
            <li><a href="" class="icon"><i class="far fa-user-circle"></i></a></li>
            <li><a href="{{ route('shopping-cart.step01') }}" class="icon"><i
                        class="fas fa-shopping-cart"></i></a></li>
            <li class="menu-toggle icon" onclick="toggleMenu();"></li>
            <li><a href="{{ route('front.contact') }}" class="nav-item">Contact Us</a></li>
        </ul>
    </header>

    <!-- main -->
    <main>
        @yield('main')
    </main>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer-up">
                <div class="contact">
                    <h3>Information</h3>
                    {{-- <h2>聯絡資訊</h2> --}}
                    <p>0955-779-166</p>
                    <p>tingscandle@gmail.com</p>
                    <p>Line @goifprby</p>
                </div>
                <div class="address">
                    <h3>Address</h3>
                    <h2>TINGS Aroma</h2>
                    <p>台中市西區<br>華美西街一段142號1樓</p>
                </div>
                <div class="transport">
                    <h3>Transportation</h3>
                    <h2>高鐵台中站</h2>
                    <p>159 高鐵臺中站-中國醫藥大學-臺中公園: 於科學博物館-植物園下車,路線及時刻表請參考《高鐵快捷公車臺中站》。</p>
                    <h2 class="train">臺中火車站周圍轉乘公車</h2>
                    <p>台中客運: 11 綠能街車、35、70、71、304、307、309、310、323、324、325</p>
                    <p>仁友客運: 45</p>
                    <p>統聯客運: 18、77、159、301、303、308、326</p>
                    <p>巨業交通: 300、305、306</p>
                    <p>豐榮客運: 48</p>
                    <p>中台灣客運: 37、302</p>
                    <br>
                    <p>下車站: 忠明國小或科博館</p>
                </div>
                <div class="img">
                    <img src="{{ asset('img/logo.jpg') }}" alt="TINGS AROMA LOGO" title="TINGS AROMA LOGO">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.3877053937354!2d120.6605140616589!3d24.158132084390033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d2e1730dcb5%3A0x9f1a3f6807feee9e!2sTINGS%20AROMA!5e0!3m2!1szh-TW!2stw!4v1641476021219!5m2!1szh-TW!2stw"
                        style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-mid">
                <h3>Opening hours</h3>
                <p class="weekdays">週一～週五 10am - 7pm</p>
                <p class="weekends">週六、日請來信留言</p>
            </div>
        </div>
        <div class="footer-down">
            <a class="top" href="#home">Top <i class="fas fa-chevron-up"></i></a>
            <h3>© TINGS Aroma 2022 | 第四組 - 老師最帥對不隊</h3>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icons">
                    <a href="https://www.facebook.com/tingscandle" title="facebook link"><i
                            class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/tingscandle/" title="instagram link"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script>
        // header
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

        // menu
        function toggleMenu() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navbarMiddle = document.querySelector('.navbar-middle');

            menuToggle.classList.toggle('active');
            navbarMiddle.classList.toggle('active');
        }

        // contact
        function showContact() {
            document.getElementById("hide-contact").style.display = "block";
            document.getElementById("contact").innerHTML = "Information -";
            document.getElementById("contact").href = "javascript:hideContact()";
        }

        function hideContact() {
            document.getElementById("hide-contact").style.display = "none";
            document.getElementById("contact").innerHTML = "Information +";
            document.getElementById("contact").href = "javascript:showContact()";
        }

        // address
        function showAddress() {
            document.getElementById("hide-address").style.display = "block";
            document.getElementById("address").innerHTML = "Address -";
            document.getElementById("address").href = "javascript:hideAddress()";
        }

        function hideAddress() {
            document.getElementById("hide-address").style.display = "none";
            document.getElementById("address").innerHTML = "Address +";
            document.getElementById("address").href = "javascript:showAddress()";
        }

        // transport
        function showTransport() {
            document.getElementById("hide-transport").style.display = "block";
            document.getElementById("transport").innerHTML = "Transport -";
            document.getElementById("transport").href = "javascript:hideTransport()";
        }

        function hideTransport() {
            document.getElementById("hide-transport").style.display = "none";
            document.getElementById("transport").innerHTML = "Transport +";
            document.getElementById("transport").href = "javascript:showTransport()";
        }

        // opening hours
        function showHours() {
            document.getElementById("hide-hours").style.display = "block";
            document.getElementById("hours").innerHTML = "Opening hours -";
            document.getElementById("hours").href = "javascript:hideHours()";
        }

        function hideHours() {
            document.getElementById("hide-hours").style.display = "none";
            document.getElementById("hours").innerHTML = "Opening hours +";
            document.getElementById("hours").href = "javascript:showHours()";
        }
    </script>
    @yield('js')
</body>

</html>
