<?php
include 'mysql_fun.php';
// Replace with your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the first 10 products from the ccc_product table
$viewQuery = show($conn, 'ccc_product', 10);

// Execute the query
$resultSet = $conn->query($viewQuery);

// Include the HTML content to display the products
include 'view_content.php';

// Close the database connection
$conn->close();
?>
