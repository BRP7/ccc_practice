<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Database connection parameters
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

    // Retrieve values from the form
    $productName = $_POST["productName"];
    $sku = $_POST["sku"];
    $productType = $_POST["productType"];
    $category = $_POST["category"];
    $manufacturerCost = $_POST["manufacturerCost"];
    $shippingCost = $_POST["shippingCost"];
    $totalCost = $_POST["totalCost"];
    $price = $_POST["price"];
    $status = $_POST["status"];
    $createdAt = $_POST["createdAt"];
    $updatedAt = $_POST["updatedAt"];

    // SQL query to insert data into the ccc_product table
    $sql = "INSERT INTO ccc_product (product_name, sku, product_type, category, manufacturer_cost, shipping_cost, total_cost, price, status, created_at, updated_at)
            VALUES ('$productName', '$sku', '$productType', '$category', '$manufacturerCost', '$shippingCost', '$totalCost', '$price', '$status', '$createdAt', '$updatedAt')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}

?>
