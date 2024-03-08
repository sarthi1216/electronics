<?php
require_once('config.php');



// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $link = $_POST['link'];

    // Check if a new image is being uploaded
    if (!empty($_FILES["image"]["name"])) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the uploaded file is an image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Error: The uploaded file is not an image.";
            $uploadOk = 0;
        }

        // Check if the file already exists
        if (file_exists($targetFile)) {
            echo "Error: The file already exists.";
            $uploadOk = 0;
        }

        // Check the file size (adjust as needed)
        if ($_FILES["image"]["size"] > 500000) {
            echo "Error: The file is too large.";
            $uploadOk = 0;
        }

        // Allow only certain image file formats (you can add more formats if needed)
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // If $uploadOk is set to 0, the upload failed
        if ($uploadOk == 0) {
            echo "Error: The file was not uploaded.";
        } else {
            // If everything is ok, try to upload the file
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                // Update banner with new image
                $updateStmt = $conn->prepare("UPDATE banner SET name=?, image=?, link=? WHERE id=?");
                $updateStmt->bind_param("sssi", $name, $targetFile, $link, $_POST['banner_id']);

                if ($updateStmt->execute()) {
                    header("Location: banner.php");
                } else {
                    echo "Error updating banner: " . $updateStmt->error;
                }

                $updateStmt->close();
            } else {
                echo "Error: There was an issue uploading the file.";
            }
        }
    } else {
        // If no new image is being uploaded, update banner without changing the image
        $updateStmt = $conn->prepare("UPDATE banner SET name=?, link=? WHERE id=?");
        $updateStmt->bind_param("ssi", $name, $link, $_POST['banner_id']);

        if ($updateStmt->execute()) {
            header("Location: banner.php");
        } else {
            echo "Error updating banner: " . $updateStmt->error;
        }

        $updateStmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

    <title>Add Banner</title>
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
    </style>
</head>
<body>
    <header>
        <h2>Add Banner</h2>
    </header>

    <main>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

        <input type="hidden" name="banner_id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">


            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <label for="link">Link URL:</label>
            <input type="text" id="link" name="link" required>

            <button type="submit">Add Banner</button>
            <a href='banner.php'>back</a>
        </form>
    </main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
