<?php
include "functions.php";
include "order_history_view.php";


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
                        <h4>Order History</h4>
                        <div class="breadcrumb__links">
                            <a href="./home.php">Home</a>
                            <span>Order history <i class="fa fa-history" aria-hidden="true"></i></span>
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

                <?php if ($orderViewData !== null) {
                    foreach ($orderViewData as $row) { ?>

                        <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">order number</th>
                                    <th scope="col"> image<i class="fa fa-image" aria-hidden="true"></i></th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">price</th>
                                    <th scope="col">details</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo ($row['order_id']); ?></th>
                                    <td><img src="admin_dashboard/<?php echo ($row['images']); ?>" width="225" height="225"></td>
                                    <td><?php echo ($row['quantity']); ?></td>
                                    <td><?php echo ($row['total_price']); ?></td>
                                    <td class='action-buttons'>
                                        <?php echo " <a href='order_details.php?order_id={$row['order_id']}'><i class='fas fa-glasses'></i> View Products</a>"
                                        ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                <?php     }
                } else {
                    echo "Failed to fetch data from the order_view table.";
                } ?>
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