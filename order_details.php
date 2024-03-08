<?php
include "functions.php";
include "order_history_view.php";


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mydatabase');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check if a product ID is provided in the query parameters
if (isset($_GET['order_id']) && is_numeric($_GET['order_id'])) {
    $productId = $_GET['order_id'];

    // Fetch products from the database for the specified category
    $result = $conn->query("SELECT * FROM order_view WHERE order_id = $productId");

    if (!$result) {
        echo "Error fetching products: " . $conn->error;
    } else {
        // Fetch all rows into an array
        $products = $result->fetch_all(MYSQLI_ASSOC);
    }
} else {
    echo "Category ID not provided.";
    exit(); // Stop further execution if category ID is not provided
}
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
            <?php
    // Display Back button
    echo "<div class='action-buttons'>
            <a href='order_history.php?'>Back</a>
          </div>"; 
    ?>

            <table class="table table-striped">
        <?php
        // Loop through the array and display data in a single column
        foreach ($products as $row) {
            echo "<tr>";
            echo "<th>ID</th><td>{$row['order_id']}</td></tr>";
            echo "<tr><th>Images</th><td>"?><img src="admin_dashboard/<?php echo ($row['images']); ?>" width="225" height="225"><?php echo"</td></tr>";
            echo "<tr><th>quantity</th><td>{$row['quantity']}</td></tr>";
            echo "<tr><th>Price</th><td>{$row['total_price']}</td></tr>";
            echo "<tr><th>first name</th><td>{$row['firstname']}</td></tr>";
            echo "<tr><th>last name</th><td>{$row['lastname']}</td></tr>";
            echo "<tr><th>phone</th><td>{$row['phone']}</td></tr>";
            echo "<tr><th>email</th><td>{$row['email']}</td></tr>";
            echo "<tr><th>address</th><td>{$row['address_1']}</td></tr>";
           
         
        }
        ?>
    </table>
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