<?php
include 'sql/connection.php';
include 'sql/functions.php';

// Check if the form is submitted for either insert or update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $productData = $_POST['pdata'];

    if ($_POST['action'] == 'insert') {
        // Insert new record
        $query = insertQuery('products', $productData);
    } elseif ($_POST['action'] == 'update') {
        // Update existing record
        $productId = $_POST['product_id'];
        $condition = "product_id = '$productId'";
        $query = updateQuery('products', $productData, $condition);
    }

    if ($conn->query($query) === TRUE) {
        echo "Operation successful!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>

<h2>Add/Edit Product</h2>

<form action="catalog/product.php" method="POST">
    <!-- ... (same form as in the index file) ... -->
    <input type="hidden" name="action" value="insert">
    <button type="submit" name="AddProduct">Add Product</button>
</form>

</body>
</html>
