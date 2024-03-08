<?php
require_once('config.php');


function getAllProducts($conn)
{
    $adminID = isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] :null;

    $sql = "SELECT * FROM products WHERE admin_id=$adminID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $products = array();
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    } else {
        return null;
    }
}

$allProducts = getAllProducts($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }


        main {
            max-width: 100%;
            margin: 20px auto;
            margin-left: 300px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            max-height: 200px;
            /* Set your desired fixed height here */
            width: auto;
        }

        .product-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-top: 20px;
        }

        .product-description {
            margin-top: 20px;
        }

        .buy-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        nav {
            background-color: #333;
            padding: 10px;
            height: 100vh;
            width: 200px;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
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

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            flex: auto;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            max-width: 100%;
            height: auto;
            max-height: 100px;
            /* Set your desired fixed height here */
            width: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .status {
            color: green;
            /* Adjust the color based on your design */
        }

        .buy-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .product-description {
            color: #555;
        }

        .banner-link {
            background-color: #ff6600;
            /* Change to the desired color */
            font-weight: bold;
            /* Optional: make the text bold */
        }

        header {
            background-color: #333;
            color: white;
            padding: 40px;
            text-align: center;
            width: 96%;

        }


        .username {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
    width: 48%; /* Adjust the width based on your design */
    box-sizing: border-box;
    margin-bottom: 20px;
    display: inline-block; /* Add this to make cards appear side by side */
}
    </style>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body>
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="category_view.php">Category View</a>
        <a href="all_products.php">Product</a>
        <a href="banner.php">banner</a>
        <a href="order.php">order</a>
        <a href="message.php">customer message</a>
        <a href="about_us.php">about_us</a>
        <a href="brand.php">brand</a>
        <a href="product_view_user.php" class="banner-link"> products view for user </a>
        <a href="logout.php">Logout</a>
    </nav>
    <section>
        <header>
            <h1>Product Page</h1>
            <div class="username"> Welcome  <i class="fas fa-user"></i> <?php echo $adminUsername; ?></div>

        </header>

        <main>
            <?php if ($allProducts) : ?>
                <div class="row">
                    <?php foreach ($allProducts as $product) : ?>
                        <div class="card">
                            <h2><?php echo $product['name']; ?></h2>
                            <img src="<?php echo $product['images']; ?>" alt="Product Image">
                            <div class="card-info">
                                <div>
                                    <p class="price">Price: $<?php echo $product['price']; ?></p>
                                    <p class="status">Availability: <?php echo $product['status']; ?></p>
                                </div>
                                <button class="buy-button">Buy Now</button>
                            </div>
                            <div class="product-description">
                                <p><?php echo $product['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p>No products found</p>
            <?php endif; ?>
        </main>
    </section>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>