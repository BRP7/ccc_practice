<?php
// process_data.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Retrieve form data
    $product_name = $_POST['product_name'];
    $sku = $_POST['sku'];
    $product_type = $_POST['product_type'];
    $category = $_POST['category'];
    $manufacturer_cost = $_POST['manufacturer_cost'];
    $shipping_cost = $_POST['shipping_cost'];
    $total_cost = $_POST['total_cost'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    // Insert data into the database
    $sql = "INSERT INTO ccc_product (product_name, sku, product_type, category, manufacturer_cost, shipping_cost, total_cost, price, status, created_at, updated_at)
            VALUES ('$product_name', '$sku', '$product_type', '$category', '$manufacturer_cost', '$shipping_cost', '$total_cost', '$price', '$status', '$created_at', '$updated_at')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>
