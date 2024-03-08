<?php


require_once('config.php');


if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
} 
$adminID = isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] :null;

// Fetch categories count from the database
$countResult = $conn->query("SELECT COUNT(*) AS category_count FROM electronics_categories WHERE admin_id=$adminID");

$countResult2 = $conn->query("SELECT COUNT(*) AS products_count FROM products  WHERE admin_id=$adminID");

$countResult3 = $conn->query("SELECT COUNT(*) AS banner_count FROM banner  WHERE admin_id=$adminID");

$countResult4 = $conn->query("SELECT COUNT(*) AS order_count FROM order_info");

$countResult5 = $conn->query("SELECT COUNT(*) AS brand_count FROM brand  WHERE admin_id=$adminID");


if (!$countResult) {
    echo "Error fetching categories count: " . $conn->error;
}

// Fetch the count value from the result
$categoryCount = $countResult->fetch_assoc()['category_count'];

$productCount = $countResult2->fetch_assoc()['products_count'];

$bannerCount = $countResult3->fetch_assoc()['banner_count'];

$ordercount = $countResult4->fetch_assoc()['order_count'];

$brandcount = $countResult5->fetch_assoc()['brand_count'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">



   
    <style>
        body {
            font-family:'Poppins';
            margin: 0;
            padding: 0;
            display: flex;
        }

        header {
            background-color: #333;
            color: white;
            padding: 40px;
            text-align: center;
            width: 95%;

        }

        nav {
            background-color: #333;
            padding: 10px;
            height: 100vh;
            width: 200px;
            color: white;
        }

        nav a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #555;
        }

        section {
            flex: 1;
            padding: 0px;
        }
        main {
            margin-left: 300px; /* Adjust the margin to accommodate the navigation bar width */
        }

        .myButton {
            width: 190px;
            height: 100px;
            background-color: #4CAF50; /* Default background color */
            color: white; /* White text color */
            border: none; /* No border */
            border-radius: 5px; /* Optional: Rounded corners */
            cursor: pointer; /* Add cursor on hover */
            text-decoration: none; /* Remove default anchor underline */
            display: flex;
            align-items: center;
            text-align: center;
            size: 20px;
            transition: background-color 0.3s ease; /* Smooth transition effect */
        }

        .myButton:hover {
            background-color: #45a049; /* Change background color on hover */
        }
        .main2 {
    margin-left: 20px; /* Adjust the margin for better alignment */
}

.h {
    margin-bottom: 20px;
}

.dashboard-item {
    display: inline-block; /* Display buttons side by side */
    margin-right: 20px; /* Add margin between buttons */
}
.count {
    font-size: 24px;
    font-weight: bold;
}

.label {
    margin-top: 10px;
    font-size: 16px;
}
.myButton {
    width: 200px; /* Set a specific width for the buttons */
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.category-button {
    background-color: #3498db; /* Blue color for Categories */
}

.category-button:hover {
    background-color: #2980b9; /* Darker blue on hover for Categories */
}

.product-button {
    background-color: #e74c3c; /* Red color for Products */
}

.product-button:hover {
    background-color: #c0392b; /* Darker red on hover for Products */
}

.banner-button {
    background-color: #2ecc71; /* Green color for Banners */
}

.banner-button:hover {
    background-color: #27ae60; /* Darker green on hover for Banners */
}

.user-products-button {
    background-color: #f39c12; /* Orange color for User Products */
}

.user-products-button:hover {
    background-color: #d35400; /* Darker orange on hover for User Products */
}
.banner-link {
    background-color: #ff6600; /* Change to the desired color */
    font-weight: bold; /* Optional: make the text bold */
}
header {
            position: relative;
        }

        .username {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
        }

    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">




</head>
<body>
    
        <nav>
        <a href="dashboard.php" class="banner-link">Home</a>
        <a href="category_view.php">Category View</a>
        <a href="all_products.php">Product </a>
        <a href="banner.php">banner</a>
        <a href="order.php">order</a>
        <a href="message.php">customer message</a>
        <a href="about_us.php">about_us</a>
        <a href="brand.php">brand</a>
        <a href="product_view_user.php">   products view for user </a>
        <a href="logout.php">Logout</a>
       
        </nav>

    <section>
            <header>
                <h2>Welcome, Admin</h2>
                <div class="username"> Welcome  <i class="fas fa-user"></i> <?php echo $adminUsername; ?></div>

        </header>
            <main>
    <h2>Dashboard Overview</h2>

    <div class="dashboard-item">
        <a href="category_view.php" class="myButton category-button">
            <div class="count"><?php echo $categoryCount; ?>  </div>
            
            <div class="label">   Categories</div>
        </a>
    </div>

    <div class="dashboard-item">
        <a href="all_products.php" class="myButton product-button">
            <div class="count"><?php echo $productCount; ?></div>
            <div class="label">Products</div>
        </a>
    </div>

    <div class="dashboard-item">
        <a href="banner.php" class="myButton banner-button">
            <div class="count"><?php echo $bannerCount; ?></div>
            <div class="label">Banners</div>
        </a>
    </div>

   
    
    <div class="dashboard-item">
        <a href="order.php" class="myButton category-button">
            <div class="count"><?php echo $ordercount; ?></div>
            <div class="label">order</div>
        </a>
    </div>
    <div class="dashboard-item">
        <a href="brand.php" class="myButton product-button">
            <div class="count"><?php echo $brandcount; ?></div>
            <div class="label">brand</div>
        </a>
    </div>
</main>


    </section>
</body>
</html>

