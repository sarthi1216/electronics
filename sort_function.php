<?php

// Function to compare prices for sorting
function comparePrices($a, $b) {
    return $a['sale_price'] - $b['sale_price'];
}

// Function to arrange prices in ascending order
function arrangePrices($products) {
    usort($products, 'comparePrices');
    return $products;
}

// Function to arrange prices in descending order
function arrangePricesDescending($products) {
    usort($products, function($a, $b) {
        return $b['sale_price'] - $a['sale_price'];
    });
    return $products;
}

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "root", "");

    // Fetch data from the database
    $stmt = $pdo->query("SELECT * FROM products");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Test the functions with dynamic data
   // echo "Original:\n";
    print_r($products);


   // echo "\nAscending order:<br>";
  //  print_r(arrangePrices($products));

    //echo "\nDescending order:\n";
   // print_r(arrangePricesDescending($products));

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sortType'])) {
        $sortType = $_POST['sortType'];
        echo "Sort Type: " . $sortType; // Debugging output
        if ($sortType == 'lowToHigh') {
            $sortedProducts = arrangePrices($products); // Call your ascending sorting function
        } elseif ($sortType == 'highToLow') {
            $sortedProducts = arrangePricesDescending($products); // Call your descending sorting function
        }
        // Output the sorted products
        foreach ($sortedProducts as $product) {
            echo "<div class='product'>" . $product['name'] . " - $" . $product['sale_price'] . "</div>";
        }
    }
}
?>
