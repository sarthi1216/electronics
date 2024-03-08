<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mydatabase');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$adminUsername = isset($_SESSION['admin_username']) ? $_SESSION['admin_username'] : "Unknown";

$adminID = isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] :null;
?>
