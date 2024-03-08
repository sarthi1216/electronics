<?php
// Check if brand_id is set and not empty
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Assuming you have a database connection established
    $db_host = 'localhost';  // Your database host
    $db_username = 'root';  // Your database username
    $db_password = '';  // Your database password
    $db_name = 'mydatabase';  // Your database name
    
    // Create a database connection
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    
    // Check if the connection was successful
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Escape the brand_id to prevent SQL injection
    $brand_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Your SQL query to retrieve brand information based on brand_id
    $sql = "SELECT * FROM brand WHERE brand_id = $brand_id";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if(mysqli_num_rows($result) > 0) {
        // Fetch the result as an associative array
        $row = mysqli_fetch_assoc($result);
?>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        
        <div class="container">
            <h2>Update Brand</h2>
            <form action="update_brand_process.php?id=<?php echo $brand_id; ?>" method="POST">
               
                <div class="form-group">
                    <label for="brand_name">Brand Name:</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" value="<?php echo $row['name']; ?>">
                </div>
                <!-- Add more fields as needed -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
<?php
    } else {
        // If no brand found with the given brand_id, you can handle it accordingly
        echo "No brand found with the given ID.";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // If brand_id is not set or empty, you can handle it accordingly
    echo "Brand ID is not set or empty.";
}
?>
