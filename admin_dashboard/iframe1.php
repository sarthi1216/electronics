<?php
require_once('config.php');

function getAllProducts($conn) {
    $sql = "SELECT * FROM products";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

    <title>Product Page</title>
    <style>
        body {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 40px;
            text-align: center;
            width: 100%;
        }

        main {
            max-width: 550px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            max-height: 200px; /* Set your desired fixed height here */
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

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .card img {
        
            height: auto;
            max-height: 100px; /* Set your desired fixed height here */
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
            color: green; /* Adjust the color based on your design */
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
    </style>
</head>
<body>
   

    <main>
        <?php if ($allProducts): ?>
            <?php foreach ($allProducts as $product): ?>
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
        <?php else: ?>
            <p>No products found</p>
        <?php endif; ?>
    </main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
