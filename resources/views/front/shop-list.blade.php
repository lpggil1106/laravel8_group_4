<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINGS Store</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/shop-list.css">
</head>

<body>
    <!-- header -->
    <header>
        <a href="#home" class="logo">
            <img src="/img/logo.png" alt="">
        </a>
        <ul class="navbar">
            <li><a href="" class="nav-item middle-nav">About Us</a></li>
            <li><a href="" class="nav-item middle-nav">Courses</a></li>
            <li><a href="" class="nav-item middle-nav">Store</a></li>
            <li><a href="" class="nav-item middle-nav">News</a></li>
            <li><a href="" class="icon" style="margin-left: 183px;"><i class="far fa-user-circle"></i></a></li>
            <li><a href="" class="icon" style="margin-right: 15px;"><i class="fas fa-shopping-cart"></i></a></li>
            <li><a href="" class="nav-item">Contact Us</a></li>
        </ul>
    </header>

    <main>
        <div class="section1">
            <div class="title">
                <h1>商店</h1>
                <div class="english">Store</div>
            </div>
            <div class="banner"></div>
            <div class="small-img"></div>
        </div>
        <!-- store -->
        <div id="store">
            <ul class="tabs">
                <li class="tab"><a href="">酒精墨水藝術</a></li>
                <li class="tab"><a href="">手工香氛蠟燭</a></li>
            </ul>
            <!-- cards -->
            <div class="cards">
                <div class="card">
                    <div class="img" style="background-image: url(/img/croissant.jpeg);"></div>
                    <div class="text-muted">酒精墨水藝術</div>
                    <div class="product-title">酒精墨水藝術用紙</div>
                    <div class="description">強韌耐熱 防水合成紙 A4 10張</div>
                    <div class="fee-and-cart">
                        <span class="fee">$4,800</span>
                        <i class="fas fa-cart-plus icon"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="img"></div>
                    <div class="text-muted">酒精墨水藝術</div>
                    <div class="product-title">酒精墨水藝術用紙</div>
                    <div class="description">強韌耐熱 防水合成紙 A4 10張</div>
                    <div class="fee-and-cart">
                        <span class="fee">$4,800</span>
                        <i class="fas fa-cart-plus icon"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="img"></div>
                    <div class="text-muted">酒精墨水藝術</div>
                    <div class="product-title">酒精墨水藝術用紙</div>
                    <div class="description">強韌耐熱 防水合成紙 A4 10張</div>
                    <div class="fee-and-cart">
                        <span class="fee">$4,800</span>
                        <i class="fas fa-cart-plus icon"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="img"></div>
                    <div class="text-muted">hehe</div>
                    <div class="product-title">酒精墨水藝術用紙</div>
                    <div class="description">強韌耐熱 防水合成紙 A4 10張</div>
                    <div class="fee-and-cart">
                        <span class="fee">$4,800</span>
                        <i class="fas fa-cart-plus icon"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="img"></div>
                    <div class="text-muted">hehe</div>
                    <div class="product-title">酒精墨水藝術用紙</div>
                    <div class="description">強韌耐熱 防水合成紙 A4 10張</div>
                    <div class="fee-and-cart">
                        <span class="fee">$4,800</span>
                        <i class="fas fa-cart-plus icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JS -->
    <script>
        // window.addEventListener('scroll', function () {
        //     const headerElement = document.querySelector('header');
        //     headerElement.classList.toggle('sticky', window.scrollY > 0);
        // });

        // hides header when scrolling down; shows header when up
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.querySelector('header').style.top = "0";
            } else {
                document.querySelector('header').style.top = "-100px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>

</html>