<?php 
session_start();
$user['id']= 1; 
$_SESSION['user_id'] = $user['id'];
?>
   <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="logout.php">Log out</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logoo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./home.php">Home</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                           
                            <li><a href="./about.php">about us</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                            <li><a href="#">my profile</a>
                                <ul class="dropdown">
                                    <li><a href="./my_account.php">my account</a></li>
                                    <li><a href="./order_history.php">order  history</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="wishlist_page.php"><img src="img/icon/heart.png" alt=""></a>
                        <a href="shopping-cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$<?php echo $total_price; ?></div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <script>
    // Get the current page URL
    var url = window.location.href;

    // Select all links in the header menu
    var links = document.querySelectorAll('.header__menu.mobile-menu ul li a');

    // Loop through each link
    links.forEach(function(link) {
        // Check if the link's href matches the current URL
        if (link.href === url) {
            // Add the 'active' class to the parent <li> element
            link.parentNode.classList.add('active');
        }
    });
</script>

    
    <!-- Header Section End -->