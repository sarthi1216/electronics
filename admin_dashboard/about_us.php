<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Electronics Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <style>
        

        header {
            background-color: #333;
            color: white;
            padding: 40px;
            text-align: center;
            width: 100%;
         
        }

        
        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-buttons {
            display: flex;
            margin-top: 10px;
        }

        .action-buttons a {
            padding: 8px 12px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 8px;
            display: flex; /* Align icon and text vertically */
            align-items: center;
        }

        .action-buttons a.delete {
            background-color: #f44336;
        }

        .action-buttons a i {
            margin-right: 8px; /* Adjust the space between icon and text */
        }

        .action-buttons a:hover {
            background-color: #45a049;
        }
        body {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav {
            width: 200px; /* Set the width of the navigation bar */
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed; /* Make the navigation bar fixed */
            height: 100vh; /* Make the navigation bar take the full height of the viewport */
            display: flex;
            flex-direction: column;
        }

        nav a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #555;
        }

        section {
            flex: 1;
            padding: 0px;
        }
        main {
            margin-left: 300px; /* Adjust the margin to accommodate the navigation bar width */
        }
        .banner-link {
    background-color: #ff6600; /* Change to the desired color */
    font-weight: bold; /* Optional: make the text bold */
}

        .username {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
        }
    </style>
</head>
<body>
    
    <nav>
    <a href="dashboard.php">Home</a>
        <a href="category_view.php">Category View</a>
        <a href="all_products.php">Product </a>
        <a href="banner.php">banner</a>
        <a href="order.php">order</a>
        <a href="message.php">customer message</a>
        <a href="about_us.php"class="banner-link">about_us</a>
        <a href="brand.php">brand</a>
        <a href="product_view_user.php">   products view for user </a>
        <a href="logout.php">Logout</a>
    </nav>
    
    <section>
        <header>
            <h2>about us</h2>
            <div class="username"> Welcome <i class="fas fa-user"></i> <?php echo $adminUsername; ?></div>
        </header>
        <main>

            <form action="your-processing-script.php" method="post">
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title"><br><br>

                <label for="content">Content:</label><br>
                <textarea id="summernote" name="content"></textarea><br><br>

                <input type="submit" value="Submit">
            </form>
        </main>
    </section>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>