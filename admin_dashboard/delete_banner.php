<?php

require_once('config.php');
// Check if the banner ID is provided in the URL
if (isset($_GET["delete"])) {
    $bannerId = $_GET["delete"];

    // Handle banner deletion
    $deleteStmt = $conn->prepare("DELETE FROM banner WHERE id = ?");
    $deleteStmt->bind_param("i", $bannerId);

    if ($deleteStmt->execute()) {
        header("Location: banner.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error deleting banner: " . $deleteStmt->error;
    }

    $deleteStmt->close();
} else {
    echo "Banner ID not provided.";
    exit(); // Stop further execution if banner ID is not provided
}
?>
