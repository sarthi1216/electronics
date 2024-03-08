<?php
include "functions.php";

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$itemsPerPage = 12;

// Calculate total number of products and pages
$totalProducts = count($products);
$totalPages = ceil($totalProducts / $itemsPerPage);

// Calculate the starting index for slicing products array
$startIndex = ($currentPage - 1) * $itemsPerPage;
$visibleProducts = array_slice($products, $startIndex, $itemsPerPage);
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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <?php
    include "header.php";
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">


                                                <ul class="nice-scroll">
                                                    <li><a href="shop.php">all products</a></li>

                                                    <?php $count = 0; ?>
                                                    <?php foreach ($categories as $category) : ?>
                                                        <?php $count++; ?>
                                                        <li><a href="shop.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?> </a></li>



                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <?php foreach ($brand as $brand) : ?>

                                                        <li><a href="shop.php?brand_id=<?php echo $brand['brand_id']; ?>"><?php echo $brand['name']; ?></a></li>

                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">price filter <i class="fa fa-filter" aria-hidden="true"></i></a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="shop.php?sort=price_low_high">low to high </a></li>
                                                    <li><a href="shop.php?sort=price_high_low">high to low </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <?php foreach ($categories as $category) : ?>
                                                    <?php $count++; ?>

                                                    <a href="shop.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">

                    <div class="row">

                        <?php foreach ($visibleProducts as $i => $product) : ?>

                            <?php $product = $products[$i]; ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mix ">
                                <div class="product__item">
                                    <a href="shop-details.php?id=<?php echo $product['id']; ?>" id="product_<?php echo $i; ?>">

                                        <div class="product__item__pic set-bg"><img src="admin_dashboard/<?php echo ($product['images']); ?>">

                                            <span class="label"><?php echo ($i % 2 == 0) ? 'Hot Sale' : 'New'; ?></span>
                                            <ul class="product__hover">
                                                <li> <a href="wishlist.php?user_id=<?php echo $_SESSION['user_id']; ?>&quantity=1&product_id=<?php echo ($product['id']); ?>"><img src="img/icon/heart.png" alt=""></a></li>
                                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6><?php echo $product['name']; ?></h6>
                                            <a href="addProductToCart.php?product_id<?php echo ($product['id']); ?>=&user_id=1&quantity=1" class="add-cart">+ Add To Cart</a>
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
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <?php for ($page = 1; $page <= $totalPages; $page++) : ?>
                                <a <?php if ($page == $currentPage) echo 'class="active"'; ?> href="shop.php?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Shop Section End -->


    <?php
    include "footer.php";
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
    <script>
        document.getElementById('sortPrice').addEventListener('change', function() {
            var sortType = this.value;
            var url = 'sort_function.php';

            // Send AJAX request to PHP script with sort type
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Replace the product list with sorted products
                    document.getElementById('productList').innerHTML = xhr.responseText;
                }
            };
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('sortType=' + sortType);
        });
    </script>
</body>

</html>