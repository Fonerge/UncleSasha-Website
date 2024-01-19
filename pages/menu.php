<?php
    require_once('../admin/db.php');
    $foods = get_all();

    $result = $data->query("SELECT id FROM menu");
    $row_counts = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Меню</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

        <section class="products-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="product-sidebar">
                            <div class="product-sidebar__single">
                                <h3>Категории меню</h3>
                                <ul class="list-unstyled product-sidebar__links">
                                    <li><a href="#">Пельмени <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Салаты <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Супы <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Гарниры <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Напитки <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="product-sorter">
                            <p>Показ <?= $row_counts; ?> элементов</p>
                            <!-- <div class="product-sorter__select">
                                <select class="selectpicker">
                                    <option value="#">Сортировка</option>
                                    <option value="#">Цена: по возрастанию</option>
                                    <option value="#">Цена: по убыванию</option>
                                </select>
                            </div> -->
                        </div>
                        
                        <div class="row">
                            <?php foreach($foods as $food) { ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="<?php echo $food['food_image']; ?>" alt="" width="100%" height="198px">
                                        <div class="product-card__image-content">
                                            <a href="food/<?php echo $food["id"]; ?>"><i class="organik-icon-visibility"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-card__two-content">
                                        <h3><a href="food/<?php echo $food["id"]; ?>"><?php echo $food['food_name']; ?></a></h3>
                                        <p><?php echo $food['food_price']; ?> ₺</p>
                                    </div>
                                </div>
                            </div>
                           <?php } ?> 
                        </div>
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