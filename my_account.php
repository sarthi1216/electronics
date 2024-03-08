<?php
include "functions.php";
include "function_for_my_account.php";


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
                        <h4>MY ACCOUNT</h4>
                        <div class="breadcrumb__links">
                            <a href="./home.php">Home</a>
                            <span>my account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- user Section begin -->

    <!-- user Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">



                
                    <div class="col-lg-8 col-md-6">
                      
                        <h6 class="checkout__title">My Account details</h6>
                        <?php if ($userInfo) { ?>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <h5>user Name<span></span></h5>
                                        <br>
                                        <h4> <?php echo ($userInfo['username']); ?></h4>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <h5>email<span></span></h5>
                                        <br>
                                        <h4><?php echo ($userInfo['email']); ?></h4>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <h5>DOB<span></span></h5>
                                        <br>
                                        <h4> <?php echo ($userInfo['DOB']); ?></h4>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <h5>gender<span></span></h5>
                                        <br>
                                        <h4><?php echo ($userInfo['gender']); ?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>

                            </div>
                    </div>
                    <br>
                    <br>
                    <form method="post" action="my_account_update.php" id="paymentForm">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                       
                        
                            <div class="col-lg-9">
                                <div class="checkout__input">
                                    <p>username<span>*</span></p>
                                    <input type="text" name="username">
                                </div>
                            </div>
                            
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Date of Birth<span>*</span></p>
                                    <input type="date" name="dob">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Gender<span>*</span></p>
                                    <label><input type="radio" name="gender" value="male"> Male</label>
                                    <label><input type="radio" name="gender" value="female"> Female</label>
                                    <label><input type="radio" name="gender" value="other"> Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                                <div class="checkout__input">
                                    <p>updated password<span>*</span></p>
                                    <input type="password" name="password">
                                </div>

                            </div>
                        <button type="submit" class="site-btn" name="update">Update Profile</button>
                    </form>
                </div>
            </div>
    </section>
    <!-- Checkout Section End -->

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
</body>

</html>