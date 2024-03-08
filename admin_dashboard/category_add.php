

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Electronics Category</title>
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
            max-width: 600px;
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

        input, select {
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

      
    </style>
</head>
</head>
<body>
    <h2>Add Electronics Category</h2>
    <form method="post" action="categoryadd.php" enctype="multipart/form-data">
        <label for="name">Category Name:</label>
        <input type="text" name="name" required><br>

        <label for="image">Category Image:</label>
        <input type="file" name="image" accept="image/*" required><br>

        <label for="order">Display Order:</label>
        <input type="number" name="order" required><br>

        <label for="state">State:</label>
        <select name="state">
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select><br>

        <input type="submit" value="Add Category">
        <a href='category_view.php'>back</a>
    </form>
    
</body>
</html>
