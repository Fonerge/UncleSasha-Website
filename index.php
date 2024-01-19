<?php 
require_once('admin/db.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="Image/x-icon" href="assets/images/shapes/favicon.png" rel="icon">
    <link type="Image/x-icon" href="assets/images/shapes/favicon.png" rel="shortcut icon">

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/organik-icon/organik-icons.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/css/organik.css" />
</head>
<body>
    <div class="page-wrapper">
        <?php require('static/header.php'); ?>

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
                    "slidesPerView": 1,
                    "loop": true,
                    "effect": "fade",
                    "autoplay": {
                        "delay": 5000
                    },
                    "navigation": {
                        "nextEl": "#main-slider__swiper-button-next",
                        "prevEl": "#main-slider__swiper-button-prev"
                    }
                    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('/assets/images/main-slider/салатик-2.jpg');">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <p style="font-size: 26px; color: #fff;">Вкус имеет значение.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('/assets/images/main-slider/салатик.png');">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <p style="font-size: 26px; color: #111111">ахвахвхахвха.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="organik-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="organik-icon-right-arrow"></i></div>
                </div>
            </div>
        </section>

        <section class="feature-box">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="thm-tiny__slider" id="contact-infos-box" data-tiny-options='{
                        "container": "#contact-infos-box",
                        "items": 1,
                        "slideBy": "page",
                        "gutter": 0,
                        "mouseDrag": true,
                        "autoplay": true,
                        "nav": false,
                        "controlsPosition": "bottom",
                        "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
                        "autoplayButtonOutput": false,
                        "responsive": {
                            "640": {
                              "items": 2,
                              "gutter": 30
                            },
                            "992": {
                              "gutter": 30,
                              "items": 3
                            },
                            "1200": {
                              "disable": true
                            }
                          }
                    }'>
                    </div>
                </div>
            </div>
        </section>

        <section class="new-products">
            <div class="container">
                <div class="new-products__top">
                    <div class="block-title ">
                        <p>Недавно добавленные</p>
                        <h3>Новинки</h3>
                    </div>
                </div>
                <div class="row filter-layout">
                    <?php $last_foods = get_all_index() ?>
                    <?php foreach($last_foods as $last_food) { ?>
                    <div class="col-lg-4 col-md-6 filter-item dairy">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <img src="<?php echo $last_food['food_image']; ?>" alt="" width="100%" height="260px">
                                <div class="product-card__two-image-content">
                                    <a href="food/<?php echo $last_food['id']; ?>"><i class="organik-icon-visibility"></i></a>
                                </div>
                            </div>
                            <div class="product-card__two-content">
                                <h3><a href="food/<?php echo $last_food["id"]; ?>"><?php echo $last_food['food_name']; ?></a></h3>
                                <p><?php echo $last_food['food_price']; ?> ₺</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="offer-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="offer-banner__box" style="background-image: url(assets/images/resources/1-2.jpg);">
                            <div class="offer-banner__content">
                                <span style="color: #fff; background-color: #111; font-size: 22px;">Заказать в Мессенджере</span>
                                <p>
                                    <a href=""><img src="/assets/images/shapes/telegram.png" width="32" height="32"></a>
                                    <a href="" style="margin-left:18px;"><img src="/assets/images/shapes/whatsapp.png" width="32" height="32"></a>
                                    <a href="" style="margin-left:18px;"><img src="/assets/images/shapes/viber.png" width="32" height="32"></a>
                                </p>
                                <a href="tel:+90(505)123-1234" class="thm-btn">+90 (505) 123-1234</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="offer-banner__box" style="background-image: url(assets/images/resources/1-1.jpg);">
                            <div class="offer-banner__content">
                                <span style="color:#fff; background:#111; font-size: 30px;">
                                    100%<br>Качество<br>Еды<br>
                                </span>
                                <a href="checkout.php" class="thm-btn">Заказать на сайте</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require('static/footer.php'); ?>
    </div>

    <?php require('static/mobile-wrapper.php'); ?>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="/assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="/assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/js/organik.js"></script>
</body>
</html>