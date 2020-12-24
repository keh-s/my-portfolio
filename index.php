<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>keh's Design</title>
    <meta name="description" content="keh's Designのポートフォリオサイト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
    <script src="jquery/sample.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
                フリーランスでweb制作を請け負うkehです。
                管理しやすく飽きのこないデザイン、訪問者が知りたい情報に辿り着くまでに迷子にならない構成など、サイト運営者様とサイト訪問者様双方の目線から最適なサイトをご提案いたします。
                </p>
            </aside>
            <article>
                <div class="article-wrapper box-shadow">
                    <ul class="main-nav-wrapper">
                        <li class="navItem selected-nI">Portfolio</li>
                        <li class="navItem unselected-nI"><a href="contact/index.php" class="link-tag">Contact</a></li>
                        <li class="navItem unselected-nI"><a href="blog/index.php" class="link-tag">Blog</a></li>
                        <li class="navItem unselected-nI"><a href="profile/index.php" class="link-tag">About</a></li>
                    </ul>

                        <!-- slide-showパート -->

                    <p class="aside-text-responsive">
                    フリーランスでweb制作を請け負うkehのポートフォリオです。サイト運営者様とサイト訪問者様双方の目線から最適なサイトをご提案いたします。
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
                            <div class="swiper-slide portImg-fadeIn" data-target="modal5"><img src="img/owada-img.jpg">
                            </div>

                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
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
                        <div class="port-modal" id="modal5">
                         <img src="img/owada-big-img.jpg" class="pm-img">
                        </div>

                    <!-- ローディング画面用設定 アニメーション-->
                        <div id="loader-bg">
                              <div id="loader">
                                    <img src="img/logo.png" alt="loadingなう" />
                                    <p>loading...</p>
                              </div>
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
            // loopedSlides: 5,
            slidesPerView: 5,  //表示する画像枚数
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