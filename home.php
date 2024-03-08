<?php
include"functions.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<?php 
        include"header.php";
    ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <?php foreach ($banners as $banner): ?>
            <div class="hero__items set-bg" >
            <img src="admin_dashboard/<?php echo $banner['image']; ?>" alt="">
            </div>
           
         <?php endforeach;?>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
    <div class="container">
        <div class="row">
            <?php $count = 0; ?>
            <?php foreach ($categories as $category): ?>
                <?php $count++; ?>
                <?php if ($count % 2 == 0): ?>
                    <div class="col-lg-7">
                        <div class="banner__item">
                            <div class="banner__item__pic">
                                <img src="admin_dashboard/<?php echo $category['image']; ?> " width=auto height=250> 
                            </div>
                            <div class="banner__item__text">
                                <h2><?php echo $category['name']; ?></h2>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-lg-7 offset-lg-5">
                        <div class="banner__item">
                            <div class="banner__item__pic">
                                <img src="admin_dashboard/<?php echo $category['image']; ?> " width=auto height=250> 
                            </div>
                            <div class="banner__item__text">
                                <h2><?php echo $category['name']; ?></h2>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    </section>

  
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
    <?php for ($i = 0; $i < min(count($products), 8); $i++) : ?>
        <?php $product = $products[$i]; ?>
        <div class="col-lg-3 col-md-6 col-sm-6 mix <?php echo ($i % 2 == 0) ? 'hot-sale' : 'new-arrivals best-sellers'; ?>">
            <div class="product__item">
            <a href="shop-details.php?id=<?php echo $product['id']; ?>" id="product_<?php echo $i; ?>">

                <div class="product__item__pic set-bg" ><img src="admin_dashboard/<?php echo ($product['images']); ?>">
               
                    <span class="label"><?php echo ($i % 2 == 0) ? 'Hot Sale' : 'New'; ?></span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><?php echo $product['name']; ?></h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>₹<?php echo $product['sale_price']; ?></h5>
                </div>
            </div>
        </div>
    <?php endfor; ?>
        </div>


        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>latest phone <br /> <span>latest <i class="fa fa-apple" aria-hidden="true"></i> watch</span> <br /> latest laptop</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="img/product-sale.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$10,000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>apple watch searis 9</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="shop-details.php?id=6" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                    <?php for ($i = 0; $i < min(count($products), 6); $i++) : ?>
                        <div class="instagram__pic__item set-bg"><img src="admin_dashboard/<?php echo ($product['images']); ?>"></div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <h3>#NEW_TECH</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

   

  <?php 
    include"footer.php";
  ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>