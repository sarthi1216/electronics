<?php
session_start(); // Start the session

// If the session exists, destroy it
if(isset($_SESSION['user_id'])) {
    session_destroy();
}

// Redirect to index.php
header("Location: index.php");
exit();
?>
