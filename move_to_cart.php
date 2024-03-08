<?php 

function moveWishlistToCart($dbConnection) {
    // Retrieve data from wish_list table
    $query = "SELECT * FROM wish_list";
    $result = mysqli_query($dbConnection, $query);

    if (!$result) {
        die("Failed to retrieve data from wish_list table: " . mysqli_error($dbConnection));
    }

    // Move data to cart table
    while ($row = mysqli_fetch_assoc($result)) {
      
        $product_id = $row['product_id'];
        $quantity = $row['quantity'];
        $user_id = $row['user_id'];

        // Insert data into cart table
        $insertQuery = "INSERT INTO cart ( product_id, quantity, user_id) VALUES ( '$product_id', '$quantity', '$user_id')";
        $insertResult = mysqli_query($dbConnection, $insertQuery);

        if (!$insertResult) {
            die("Failed to move data to cart table: " . mysqli_error($dbConnection));
        }
    }

    // Empty wish_list table
    $truncateQuery = "TRUNCATE TABLE wish_list";
    $truncateResult = mysqli_query($dbConnection, $truncateQuery);

    if (!$truncateResult) {
        die("Failed to empty wish_list table: " . mysqli_error($dbConnection));
    }

    header("Location: shopping-cart.php");

}


$dbConnection = mysqli_connect("localhost", "root", "", "mydatabase");


$move = moveWishlistToCart($dbConnection);

?>