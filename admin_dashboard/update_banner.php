<?php
require_once('config.php');

// Check if a banner ID is provided in the query parameters
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $bannerId = $_GET['id'];

    // Fetch banner information from the database
    $result = $conn->query("SELECT * FROM banner WHERE id = $bannerId");

    if (!$result) {
        echo "Error fetching banner: " . $conn->error;
    }

    // Handle form submission for updating banner
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $link = $_POST['link'];

        // Update banner information in the database
        $updateStmt = $conn->prepare("UPDATE banner SET name = ?, link = ? WHERE id = ?");
        $updateStmt->bind_param("ssi", $name, $link, $bannerId);

        if ($updateStmt->execute()) {
            echo "Banner updated successfully!";
        } else {
            echo "Error updating banner: " . $updateStmt->error;
        }

        $updateStmt->close();
    }
} else {
    echo "Banner ID not provided.";
    exit(); // Stop further execution if banner ID is not provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <title>Update Banner</title>
    <style>
        body {
            font-family: 'Poppins';
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        main {
            max-width: 400px;
            width: 80%;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 12px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #4caf50;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h2>Update Banner</h2>
    </header>

    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <?php
            // Display banner information in the form for updating
            while ($row = $result->fetch_assoc()) {
                echo '<label for="name">Name:</label>';
                echo '<input type="text" id="name" name="name" value="' . $row['name'] . '" required>';

                echo '<label for="link">Link URL:</label>';
                echo '<input type="text" id="link" name="link" value="' . $row['link'] . '" required>';
            }
            ?>
            <button type="submit">Update Banner</button>
        </form>
        <a href="banner.php">Back to Banners</a>
    </main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
