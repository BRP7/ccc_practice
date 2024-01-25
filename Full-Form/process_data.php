<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Connect to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ccc_practice";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $productName = $_POST['pdata']['product_name'];
    $sku = $_POST['sku'];
    $productType = $_POST['pdata']['product_type'];
    $category = $_POST['pdata']['category'];
    $manufacturerCost = $_POST['pdata']['manufacturer_cost'];
    $shippingCost = $_POST['pdata']['shipping_cost'];
    $totalCost = $_POST['pdata']['total_cost'];
    $price = $_POST['pdata']['price'];
    $status = $_POST['pdata']['status'];
    $createdAt = $_POST['pdata']['created_at'];
    $updatedAt = $_POST['pdata']['updated_at'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO ccc_product (product_name, sku, product_type, category, manufacturer_cost, shipping_cost, total_cost, price, status, created_at, updated_at) VALUES ('$productName', '$sku', '$productType', '$category', '$manufacturerCost', '$shippingCost', '$totalCost', '$price', '$status', '$createdAt', '$updatedAt')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
