<?php
// Function to fetch all data from the about_us table
function getAllAboutUsData($conn) {
    // Array to store the fetched data
    $aboutUsData = array();

    // Query to select all data from the about_us table
    $sql = "SELECT * FROM about_us";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query executed successfully
    if ($result && $result->num_rows > 0) {
        // Fetch each row from the result set and add it to the aboutUsData array
        while ($row = $result->fetch_assoc()) {
            $aboutUsData[] = $row;
        }
    }

    // Free the result set
    $result->free_result();

    // Return the aboutUsData array
    return $aboutUsData;
}

// Example usage:
// Assuming $conn is your database connection object (already connected)

// Call the function to get all data from the about_us table
$aboutUsData = getAllAboutUsData($conn);

// Print the fetched data
if (!empty($aboutUsData)) {
    foreach ($aboutUsData as $data) {
        echo "ID: " . $data['id'] . "<br>";
        echo "Title: " . $data['title'] . "<br>";
        echo "Content: " . $data['content'] . "<br>";
        echo "---------------------<br>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
