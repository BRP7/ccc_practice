<?php
include 'sql/connection.php';
include 'sql/functions.php'; // Make sure to include this file

// Fetch the last 20 records from the database
$query = selectQuery('ccc_product', 'product_id,product_name, sku, category', '', 'ORDER BY created_at DESC LIMIT 20');
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>

<h2>Product List</h2>

<table border="1">
    <tr>

    <th>Product ID</th>
        <th>Product Name</th>
        <th>SKU</th>
        <th>Category</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['product_id']}</td>";
        echo "<td>{$row['product_name']}</td>";
        echo "<td>{$row['sku']}</td>";
        echo "<td>{$row['category']}</td>";
        echo "<td><a href='catalog/product.php?action=edit&id={$row['product_id']}'>Edit</a></td>";
        echo "<td><a href='catalog/product.php?action=delete&id={$row['product_id']}'>Delete</a></td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
