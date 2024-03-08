<?php
// Database Connection (Replace with your credentials)
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

// Input Validation and Sanitization (Simplified example - Enhance this)
$firstname = ($_POST['firstname']);
$lastname = ($_POST['lastname']);
$country = ($_POST['country']);
$address1 = ($_POST['address1']);
$address2 = ($_POST['address2']);
$city = ($_POST['city']);
$state = ($_POST['state']);
$pincode = ($_POST['pincode']);
$phone = ($_POST['phone']);
$email = ($_POST['email']);
$user_id = ($_POST['user_id']);
// ... Sanitize all other input fields similarly


// Assuming your table is named 'orders' 
$sql = "INSERT INTO address (user_id, firstname, lastname, country, address_1, address_2, town, 
                            state, postcode, phone, email)
        VALUES ('$user_id', '$firstname', '$lastname', '$country', '$address1', '$address2', 
                '$city', '$state', '$pincode', '$phone', '$email')";

// Execute Query
if ($conn->query($sql) === TRUE) {
    header('Location: confirm.php');     
    // Consider redirecting to a success page 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$query = "SELECT * FROM cart"; // Assuming you have relevant columns for product_id, product_name, etc.
$result = $conn->query($query);

// Check for query errors
if (!$result) {
    die("Query failed: " . $mysqli->error);
}

// Initialize the cart array
$cart = array();

// Fetch all cart items
while ($row = $result->fetch_assoc()) {
    $product_id = $row['product_id'];  // Adjust column names accordingly
    $user_id = $row['user_id'];
    $total_price = $row['total_price'];
    $quantity = $row['quantity'];

    // Add item to cart array
    $cart[] = array(
        'product_id' => $product_id,
        'user_id' => $user_id,
        'price' => $total_price,
        'quantity' => $quantity
    );
}

// Prepare an SQL statement with placeholders to insert into order_info
$stmt = $conn->prepare("INSERT INTO order_info (product_id, user_id, total_price, quantity ) VALUES (?, ?, ?, ?)");

// Bind parameters and execute the insert for each item
foreach ($cart as $item) {
    $stmt->bind_param("iiii", $item['product_id'], $item['user_id'], $item['price'], $item['quantity']);
    $stmt->execute();
}

// Close the statement
$stmt->close();

// Prepare an SQL statement to update the quantity of products
$update_quantity_stmt = $conn->prepare("UPDATE products SET quantity = quantity - ? WHERE id = ?");

// Bind parameters and execute the update for each item in the cart
foreach ($cart as $item) {
    $product_id = $item['product_id'];
    $ordered_quantity = $item['quantity'];

    echo "Updating quantity for product ID: $product_id<br>";

    $update_quantity_stmt->bind_param("ii", $ordered_quantity, $product_id);
    if ($update_quantity_stmt->execute()) {
        echo "Quantity updated successfully<br>";
    } else {
        echo "Error updating quantity: " . $conn->error . "<br>";
    }
}

// Close the statement
$update_quantity_stmt->close();


// Now delete cart data from the cart table
$delete_query = "DELETE FROM cart";
$delete_result = $conn->query($delete_query);

if (!$delete_result) {
    echo "Error deleting cart data: " . $conn->error;
}

$conn->close();
?>
