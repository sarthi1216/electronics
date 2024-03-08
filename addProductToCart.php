<?php
    function addProductToCart($dbConnection, $userId, $productId, $quantity) {
        // Prepare SQL statement to insert product into cart
        $query = "INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)";
        
        // Prepare the statement
        $stmt = mysqli_prepare($dbConnection, $query);
        
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "iii", $userId, $productId, $quantity);
        
        // Execute the statement
        $success = mysqli_stmt_execute($stmt);
        
        // Close the statement
        mysqli_stmt_close($stmt);
        
        return $success;
    }


    $dbConnection = mysqli_connect("localhost", "root", "", "mydatabase");

    $_GET['product_id'];
    $productId=$_GET['product_id'];
    
    $_GET['user_id'];
    $userId=$_GET['user_id'];
    
    $_GET['quantity'];
    $quantity=$_GET['quantity'];
    print_r($userId);

        // Call the function to add the product to the cart
        if (addProductToCart($dbConnection, $userId, $productId, $quantity)) {
           
        } else {
            echo "Failed to add product to cart.";
        }



?>