<?php
require_once('config.php');
$adminID = isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] :null;

// Fetch banners from the database
$result = $conn->query("SELECT * FROM banner WHERE admin_id=$adminID");

if (!$result) {
    echo "Error fetching banners: " . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

   <style>
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
            padding: 20px;
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
            margin-top: 43px;
          
        }

        .action-buttons a {
            padding: 8px 12px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 8px;
        }

        header {
            background-color: #333;
            color: white;
            padding: 40px;
            text-align: center;
            width: 100%;
        }
        .username {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
        }

        .action-buttons a.delete {
            background-color: #f44336;
        }

        .action-buttons a:hover {
            background-color: #45a049;
        }
        main {
            margin-left: 300px; /* Adjust the margin to accommodate the navigation bar width */
        }
        .banner-link {
    background-color: #ff6600; /* Change to the desired color */
    font-weight: bold; /* Optional: make the text bold */
    }
        
    </style>
</head>
<body>
        <nav>
        <a href="dashboard.php">Home</a>
        <a href="category_view.php">Category View</a>
        <a href="all_products.php">Product </a>
        <a href="banner.php" class="banner-link">banner</a>
        <a href="order.php">order</a>
        <a href="message.php">customer message</a>
        <a href="about_us.php">about_us</a>
        <a href="brand.php">brand</a>
        <a href="product_view_user.php">   products view for user </a>
        <a href="logout.php">Logout</a>
        </nav>

    <section>
        
       <header> 
        <h1>banner</h1>
        <div class="username"> Welcome  <i class="fas fa-user"></i> <?php echo $adminUsername; ?></div>

        </header>
        
        <main>
        <div class="action-buttons">
            <a href="add_banner.php">Add banner</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Link</th>
                <th>Action</th>
            </tr>

            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td><img src='{$row['image']}' alt='Banner Image' style='max-width: 100px; max-height: 100px;'></td>";
                echo "<td>{$row['link']}</td>";
                echo "<td class='action-buttons'>
                        <a href='update_banner.php?id={$row['id']}'><i class='fas fa-edit'></i> Update</a>
                        <a href='delete_banner.php?delete={$row['id']}' class='delete'><i class='fas fa-trash-alt'></i> Delete</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
    </section>
</body>
</html>