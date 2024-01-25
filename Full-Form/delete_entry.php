<?php
// delete_entry.php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ccc_practice";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the product ID from the URL
    $product_id = $_GET['id'];

    // Delete the record based on the Product ID
    $sql = "DELETE FROM ccc_product WHERE product_id = $product_id";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>
