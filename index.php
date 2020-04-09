<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>keh's Design</title>
    <meta name="description" content="keh's Dsignのポートフォリオサイト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
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
            <h1 class="main-ttl">keh's Design</h1>
        </header>
        <div class="main-part-wrapper">
            <aside>
                <p class="aside-text">
                    IT転職を目指すプログラミング完全未経験の40代フリーターkehのポートフォリオサイトです。現在はサイト模写のみですが、1日も早く実案件の実績がご紹介できるよう日々精進しております。
                </p>
            </aside>
            <article>
                <div class="article-wrapper">
                    <ul class="main-nav-wrapper">
                        <li class="navItem selected-nI">Portfolio</li>
                        <li class="navItem unselected-nI"><a href="contact/index.php" class="link-tag">Contact</a></li>
                        <li class="navItem unselected-nI"><a href="blog/index.php" class="link-tag">Blog</a></li>
                        <li class="navItem unselected-nI"><a href="profile/index.php" class="link-tag">About</a></li>
                    </ul>

<!---slide-showパート---!>

<p class="aside-text-responsive">
                    IT転職を目指すプログラミング完全未経験の40代フリーターkehのポートフォリオサイトです。現在はサイト模写のみですが、1日も早く実案件の実績がご紹介できるよう日々精進しております。
                </p>
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
                    <img src="img/isara-big-img.jpg" class="pm-img">
                </div>
        </div>
        </article>
    </div>
    </div>
    <script>
        var mySwiper = new Swiper('.swiper-container', {  //swiperの初期化
            // ここからオプション

            // pagination: {  //スライドの下の「・・・」（何枚目のスライドかを表示）
            //     el: ".swiper-pagination",
            //     clickable: true
            // },

            navigation: {  // 左右（上下）の矢印 < >ボタン
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },

            loop: true, //最後の画像→最初の画像にループ
            // loopedSlides: 4,
            slidesPerView: 4,  //表示する画像枚数
            speed: 4000, //スライドする速度 1000＝1秒
            spacebetween: 60, //画像と画像の間隔
            centeredSlides : true,
            autoplay: { //自動スライド設定
                delay: 2000, //3000ミリ秒＝3秒
                disableOnInteraction: false, //操作されたら自動再生をストップさせる設定
            },
            breakpoints: {
                320: {  //320px～600pxまではこの設定
                 slidesPerView: 1,
                  spaceBetween: 10
                 },

                 600: {  //600px～767pxまではこの設定
                 slidesPerView: 2,
                  spaceBetween: 10
                 },

                768: { //768px～からはこの設定
                 slidesPerView: 3,
                  spaceBetween: 20
                 }
                }
        });
    </script>
</body>

</html>