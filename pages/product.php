<?php
  require_once('../admin/db.php');
  $food = get_foods_by_id($_GET['id']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $food['food_name']; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="../assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="../assets/vendors/organik-icon/organik-icons.css" />
    <link rel="stylesheet" href="../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="../assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="../assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="../assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="../assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="../assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="../assets/css/organik.css" />
</head>
<body>
    <div class="page-wrapper">
        <?php require('../static/header.php'); ?>
        <section class="product_detail">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="product_detail_image">
                            <img src="/<?php echo $food['food_image']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="product_detail_content">
                            <h2><?php echo $food['food_name']; ?></h2>
                            <div class="product_detail_review_box">
                                <div class="product_detail_price_box">
                                    <p>Цена: <?php echo $food['food_price']; ?> ₺</p>
                                </div>
                            </div>
                            <div class="product_detail_text">
                                <p><?php echo $food['food_discription']; ?></p>
                            </div>
                            <ul class="list-unstyled category_tag_list">
                                <li><span>Категория:</span> <?php echo $food['food_category']; ?></li>
                            </ul>
                            <ul class="list-unstyled product_detail_address">
                                <li>Есть в наличии <i class="fa fa-check-circle" style="color: green;"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require('../static/footer.php'); ?>
    </div>
    <?php require('../static/mobile-wrapper.php'); ?>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="../assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="../assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="../assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="../assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="../assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="../assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="../assets/vendors/odometer/odometer.min.js"></script>
    <script src="../assets/vendors/swiper/swiper.min.js"></script>
    <script src="../assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="../assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="../assets/vendors/wow/wow.js"></script>
    <script src="../assets/vendors/isotope/isotope.js"></script>
    <script src="../assets/vendors/countdown/countdown.min.js"></script>
    <script src="../assets/js/organik.js"></script>
</body>
</html>