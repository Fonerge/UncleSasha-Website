<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Контакты</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link type="Image/x-icon" href="assets/images/shapes/favicon.png" rel="icon">
    <link type="Image/x-icon" href="assets/images/shapes/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/organik-icon/organik-icons.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/css/organik.css" />
</head>
<body>
    <div class="page-wrapper">

        <?php require('../static/header.php'); ?>

        <section class="contact-infos">
            <div class="container">
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
                    <div>
                        <div class="contact-infos__single">
                            <i class="organik-icon-location"></i>
                            <h3>Адрес:</h3>
                            <p>Alanya/Antalya, Saray Mah, 07400</p>
                        </div>
                    </div>
                    <div>
                        <div class="contact-infos__single">
                            <i class="organik-icon-email"></i>
                            <h3>Эл. почта:</h3>
                            <p>
                                <a href="mailto:info@unclesasha.com">info@unclesasha.com</a>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="contact-infos__single">
                            <i class="organik-icon-calling"></i>
                            <h3>Телефон:</h3>
                            <p><a href="tel:+90 (505) 457-7402">+90 (505) 457-7402</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="google-map__default mb-120">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__default" allowfullscreen></iframe>
        </div>

        <?php require('../static/footer.php'); ?>
    </div>

    <?php require('../static/mobile-wrapper.php'); ?>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/js/organik.js"></script>
</body>

</html>