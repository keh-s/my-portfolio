<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>keh's Design</title>
    <meta name="description" content="keh's Dsignのポートフォリオサイト">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- <link rel="stylesheet" href="slick-theme.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="slick.css" type="text/css"> -->
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
    <!-- <script src="slick.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="./js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="../js/jquery-migrate-1.4.1.min.js"></script>
    <script src="jquery/sample.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <h1 class="main-title">keh's Design</h1>
        </header>
        <div class="main-part-wrapper">
            <aside>
                <h2 class="selected-navItem">Portfolio</h2>
                <p class="aside-text">
                    IT転職を目指すプログラミング完全未経験の40代フリーターkehのポートフォリオ集。現在はサイト模写のみですが、1日も早く実案件がご紹介できるよう日々勉強しています。
                </p>
            </aside>
            <article>
                <div class="article-wrapper">
                    <ul class="unselected-navItem">
                        <li><a href="contact/index.php" class="link-tag">Contact</a></li>
                        <li><a href="blog/index.php" class="link-tag">Blog</a></li>
                        <li><a href="profile/index.php" class="link-tag">About</a></li>
                    </ul>

                    <h2 class="article-title">Portfolio</h2>
                    <div class="swiper-container">
                        <div class="portfolio-images swiper-wrapper">
                            <div class="swiper-slide portImg-fadeIn" data-target="modal1"><img src="img/airbnb-img.jpg">
                            </div>
                            <div class="swiper-slide portImg-fadeIn" data-target="modal2"><img src="img/jin-img.jpg">
                            </div>
                            <div class="swiper-slide portImg-fadeIn" data-target="modal3"><img src="img/dental-img.jpg">
                            </div>
                            <div class="swiper-slide portImg-fadeIn" data-target="modal4"><img src="img/isara-img.jpg">
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <!-- スクロールバー（※省略可） -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>
                </div>

                <!---------------- モーダルウィンドウ用画像 ---------------->

                <div class="port-modal" id="modal1">
                    <img src="img/airbnb-big-img.jpg" class="pm-img">
                </div>
                <div class="port-modal" id="modal2">
                    <img src="img/jin-big-img.jpg" class="pm-img">
                </div>
                <div class="port-modal" id="modal3">
                    <img src="img/dental-big-img.jpg" class="pm-img">
                </div>
                <div class="port-modal" id="modal4">
                    <img src="img/isara-img.jpg" class="pm-img">
                </div>
        </div>
        </article>
    </div>
    </div>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            // ここからオプション

            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },

            loop: true,
            slidesPerView: 3,
            speed: 5000,
            spacebetween: 100,
            cssEase: 'linear',
            autoplay: {
                delay: 2000, //3000ミリ秒＝3秒
                disableOnInteraction: true //操作されたら自動再生をストップさせる設定
            },

            autoplay: {
                delay: 1000, //3000ミリ秒＝3秒
                disableOnInteraction: true //操作されたら自動再生をストップさせる設定
            },
        })
    </script>
</body>

</html>