<?php
include "function_for_view.php";
include "functions.php";
$product = getProductByIdFromURL();

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
   <style>
    .popup {
  display: none;
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #f4f4f4;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
}

.popup.show {
  display: block;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="admin_dashboard/<?php echo  $product['images']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4><?php echo  $product['name']; ?></h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                            <h3>$<?php echo  $product['sale_price']; ?> <span>$<?php echo  $product['price']; ?></span></h3>
                            <p><?php echo  $product['description']; ?></p>

                            <div class="product__details__cart__option">
                                <form action="addProductToCart.php" method="GET" onsubmit="showPopup('Product added to cart!')">
                                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" name="quantity" value="1">
                                        </div>
                                    </div>
                                    <button type="submit" class="add-cart">+ Add To Cart</button>
                                </form>

                            </div>
                            <div class="product__details__btns__option">
                                
                            <a href="wishlist.php?user_id=<?php echo $_SESSION['user_id']; ?>&quantity=1&product_id=<?php echo $product['id']; ?>"><i class="fa fa-heart"></i> add to wishlist</a>
                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Guaranteed Safe Checkout</span></h5>
                                <img src="img/shop-details/details-payment.png" alt="">
                                <ul>
                                    <li><span>SKU:</span>12345<?php echo  $product['id']; ?> </li>
                                    <li><span>Categories:</span> <?php echo  $product['type']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                        Previews(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                        information</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                            ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                            pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p><?php echo  $product['description']; ?></p>

                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p><?php echo  $product['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p><?php echo  $product['description']; ?></p>
                                            <p><?php echo  $product['description']; ?></p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p><?php echo  $product['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                            ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                            pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p><?php echo  $product['description']; ?></p>
                                            <p><?php echo  $product['description']; ?></p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p><?php echo  $product['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                <?php
                // Shuffle the $products array to get a random selection
                shuffle($products);

                // Select the first 4 products
                $random_products = array_slice($products, 0, 4);

                // Loop through the random selection of products
                foreach ($random_products as $i => $product) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 mix <?php echo ($i % 2 == 0) ? 'hot-sale' : 'new-arrivals best-sellers'; ?>">
                        <div class="product__item">
                            <a href="shop-details.php?id=<?php echo $product['id']; ?>" id="product_<?php echo $i; ?>">
                                <div class="product__item__pic set-bg"><img src="admin_dashboard/<?php echo $product['images']; ?>"></div>
                                <span class="label"><?php echo ($i % 2 == 0) ? 'Hot Sale' : 'New'; ?></span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                </ul>
                            </a>
                            <div class="product__item__text">
                                <h6><?php echo $product['name']; ?></h6>
                                <a href="shoppingcart.php?id=<?php echo $product['id']; ?>" class="add-cart">+ Add To Cart</a>
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
    </section>

    <!-- Related Section End -->


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
        function showPopup(message) {
  document.getElementById("popupText").innerText = message;
  document.getElementById("popup").classList.add("show");
  setTimeout(closePopup, 3000); // Close popup after 3 seconds
}

function closePopup() {
  document.getElementById("popup").classList.remove("show");
}
</script>
</body>

</html>