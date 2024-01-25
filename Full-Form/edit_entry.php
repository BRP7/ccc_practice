<?php
// edit_entry.php

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

    // Fetch the record based on the Product ID
    $sql = "SELECT * FROM ccc_product WHERE product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the form for editing the product
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Product</title>
        </head>
        <body>

        <h2>Edit Product</h2>

        <form action="update_entry.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" required><br>

            <!-- Add other form fields here with their values -->

            <input type="submit" value="Update Product">
        </form>

        </body>
        </html>
        <?php
    } else {
        echo "Product not found";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>
