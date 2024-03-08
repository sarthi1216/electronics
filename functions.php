<?php

// Function to get all products from a database table
function getProductsByCategoryFromURL($dbConnection) {
    // Check if the category_id parameter is set in the URL
    if(isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        // Query to select products from the database table based on category_id
        $query = "SELECT * FROM products WHERE category_id = $category_id AND quantity > 0";

    } elseif(isset($_GET['brand_id'])) {
        $brand_id = $_GET['brand_id'];
        // Query to select products from the database table based on brand_id
        $query = "SELECT * FROM products WHERE brand_id = $brand_id AND quantity > 0";
    } else {
        // If neither category_id nor brand_id is provided in the URL, fetch all products
        $query = "SELECT * FROM products where quantity > 0";
    }
    
    // Check if sorting parameter is provided in the URL
    if(isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        // Add sorting condition to the query
        if($sort == 'price_low_high') {
            $query .= " ORDER BY price ASC";
        } elseif($sort == 'price_high_low') {
            $query .= " ORDER BY price DESC";
        }
    }
    
    // Executing the query
    $result = mysqli_query($dbConnection, $query);
    
    // Check if the query was successful
    if (!$result) {
        // Query failed, return an empty array or handle the error accordingly
        return [];
    }
    
    // Array to store the retrieved products
    $products = [];
    
    // Loop through the result set and fetch each product
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the product to the products array
        $products[] = $row;
    }
    
    // Free the result set
    mysqli_free_result($result);
    
    // Return the array of products
    return $products;
}



// Function to get all categories from a database table
function getAllCategories($dbConnection) {
    // Query to select all categories from the database table (assuming table name is 'categories')
    $query = "SELECT * FROM electronics_categories";
    
    // Executing the query
    $result = mysqli_query($dbConnection, $query);
    
    // Check if the query was successful
    if (!$result) {
        // Query failed, return an empty array or handle the error accordingly
        return [];
    }
    
    // Array to store the retrieved categories
    $categories = [];
    
    // Loop through the result set and fetch each category
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the category to the categories array
        $categories[] = $row;
    }
    
    // Free the result set
    mysqli_free_result($result);
    
    // Return the array of categories
    return $categories;
}


// Function to get all banners from a database table
function getAllBanners($dbConnection) {
    // Query to select all banners from the database table (assuming table name is 'banners')
    $query = "SELECT * FROM banner";
    
    // Executing the query
    $result = mysqli_query($dbConnection, $query);
    
    // Check if the query was successful
    if (!$result) {
        // Query failed, return an empty array or handle the error accordingly
        return [];
    }
    
    // Array to store the retrieved banners
    $banners = [];
    
    // Loop through the result set and fetch each banner
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the banner to the banners array
        $banners[] = $row;
    }
    
    // Free the result set
    mysqli_free_result($result);
    
    // Return the array of banners
    return $banners;
}
function getAllBrandData($dbConnection) {
    // Query to select all banners from the database table (assuming table name is 'banners')
    $query = "SELECT * FROM brand";
    
    // Executing the query
    $result = mysqli_query($dbConnection, $query);
    
    // Check if the query was successful
    if (!$result) {
        // Query failed, return an empty array or handle the error accordingly
        return [];
    }
    
    // Array to store the retrieved banners
    $brand = [];
    
    // Loop through the result set and fetch each banner
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the banner to the banners array
        $brand[] = $row;
    }
    
    // Free the result set
    mysqli_free_result($result);
    
    // Return the array of banners
    return $brand;
}
function getAllDataFromView($dbConnection) {
    // Query to select all data from the 'frontend_products' view
    $query = "SELECT * FROM your_view_name";

    // Executing the query
    $result = mysqli_query($dbConnection, $query);

    // Check if the query was successful
    if (!$result) {
        // Query failed, return an empty array or handle the error accordingly
        return []; 
    }

    // Array to store the retrieved data
    $data = [];

    // Loop through the result set and fetch each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the row to the data array
        $data[] = $row;
    }

    // Free the result set
    mysqli_free_result($result);

    // Return the array of data
    return $data;
}

function add_column_data($result, $column_name) {
    $sum = 0;

    // Check if the column exists
    $field_exists = false;
    foreach (mysqli_fetch_fields($result) as $field) {
        if ($field->name == $column_name) {
            $field_exists = true;
            break;
        }
    }
    if (!$field_exists) {
        throw new Exception("Column '{$column_name}' does not exist.");
    }

    // Iterate through rows and sum the column values
    while ($row = mysqli_fetch_assoc($result)) {
        if (!is_numeric($row[$column_name])) {
            throw new Exception("Column '{$column_name}' contains non-numeric data.");
        }
        $sum += $row[$column_name];
    }

    return $sum;
}

function getAllDatawishlist_products_view($dbConnection) {
    // Query to select all data from the 'frontend_products' view
    $query = "SELECT * FROM wishlist_products_view";

    // Executing the query
    $result = mysqli_query($dbConnection, $query);

    // Check if the query was successful
    if (!$result) {
        // Query failed, return an empty array or handle the error accordingly
        return []; 
    }

    // Array to store the retrieved data
    $wish = [];

    // Loop through the result set and fetch each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Add the row to the data array
        $wish[] = $row;
    }

    // Free the result set
    mysqli_free_result($result);

    // Return the array of data
    return $wish;
}



// Function to calculate total price
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function calculateTotalPrice($product_id, $quantity, $conn) {
    $total_price = 0;

    // Fetch product price from products table
    $product_query = "SELECT price FROM products WHERE id = $product_id";
    $product_result = $conn->query($product_query);

    if ($product_result->num_rows > 0) {
        $product_row = $product_result->fetch_assoc();
        $price = $product_row['price'];

        // Calculate total price
        $total_price = $price * $quantity;
    }

    return $total_price;
}

// Assuming your table is named 'cart' 
$cart_query = "SELECT product_id, quantity FROM cart";
$cart_result = $conn->query($cart_query);

// Check for query errors
if (!$cart_result) {
    die("Query failed: " . $conn->error);
}

// Process cart items
while ($cart_row = $cart_result->fetch_assoc()) {
    $product_id = $cart_row['product_id'];
    $quantity = $cart_row['quantity'];

    // Calculate total price for each item
    $total_price = calculateTotalPrice($product_id, $quantity, $conn);

    // Update cart table with total price
    $update_query = "UPDATE cart SET total_price = $total_price WHERE product_id = $product_id";
    $update_result = $conn->query($update_query);

 
}





// Example usage:
// Assuming $dbConnection is your database connection object
// You need to establish your database connection before calling this function
$dbConnection = mysqli_connect("localhost", "root", "", "mydatabase");

// Check the connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


// Call the function to get all categories
$categories = getAllCategories($dbConnection);


// Call the function to get all products
$products = getProductsByCategoryFromURL($dbConnection);

// Call the function to get all banners
$banners = getAllBanners($dbConnection);

$data =getAllDataFromView($dbConnection);
$brand = getAllBrandData($dbConnection);
$query = "SELECT * FROM your_view_name";
$result = mysqli_query($dbConnection, $query);

$total_price = add_column_data($result, 'total_price');

$wishlist = getAllDatawishlist_products_view($dbConnection)
?>


