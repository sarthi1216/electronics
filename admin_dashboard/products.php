<?php
require_once('config.php');

// Fetch categories for dropdown menu
$categoryResult = $conn->query("SELECT * FROM electronics_categories");
$brandResult = $conn->query("SELECT * FROM brand");


if (!$categoryResult) {
    echo "Error fetching categories: " . $conn->error;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $salePrice = $_POST['sale_price'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $categoryId = $_POST['category'];
    $brandId = $_POST['brand'];


    // Upload multiple images (you may need to handle file uploads securely)
    $imageFileNames = [];

    if (!empty($_FILES['images']['name'][0])) {
        $uploadDirectory = 'product_images/';
        $totalFiles = count($_FILES['images']['name']);

        for ($i = 0; $i < $totalFiles; $i++) {
            $imageFileName = $uploadDirectory . basename($_FILES['images']['name'][$i]);
            move_uploaded_file($_FILES['images']['tmp_name'][$i], $imageFileName);
            $imageFileNames[] = $imageFileName;
        }
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO products (name, description, quantity, price, sale_price, type, status, category_id, brand,  images) VALUES (?, ?,  ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiddssis", $name, $description, $quantity, $price, $salePrice, $type, $status, $categoryId,$brandId, implode(',', $imageFileNames));

    if ($stmt->execute()) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

    <style>
        body {
            font-family: 'Poppins';
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            max-width: 1000px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input,
        select {
            padding: 10px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h2>Add Product</h2>
    </header>

    <main>
        <form method="post" action="products_add.php" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" name="name" required>

            <label for="description">Product Description:</label>
            <textarea name="description" rows="4" required></textarea>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" required>

            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" required>

            <label for="sale_price">Sale Price:</label>
            <input type="number" name="sale_price" step="0.01">

            <label for="type">Type:</label>
            <input type="text" name="type" required>

            <label for="status">Status:</label>
            <select name="status">
                <option value="published">Published</option>
                <option value="draft">Draft</option>
            </select>
            <input type="hidden" name="category_id" value="<?php echo $categoryId; ?>">

            <label for="category">Category:</label>
            <select name="category" required>
                <?php
                while ($category = $categoryResult->fetch_assoc()) {
                    echo "<option value='{$category['id']}'>{$category['name']}</option>";
                }
                ?>
            </select>



            

           
            <label for="brand">Category:</label>
            <select name="brand" required>
                <?php
                while ($brand = $brandResult->fetch_assoc()) {
                    echo "<option value='{$brand['id']}'>{$brand['name']}</option>";
                    echo ($brand['id']);

                }
                ?>
            </select>
            <label for="images">Product Images:</label>
            <input type="file" name="images[]" accept="image/*" multiple required>

            <input type="submit" value="Add Product">
            <main>
                <div class="action-buttons">
                    <a href="product_view.php?category_id=<?php echo $categoryId; ?>">Back</a>
                </div>
        </form>
    </main>
</body>

</html>