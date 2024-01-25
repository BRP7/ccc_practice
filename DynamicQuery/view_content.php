<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Products</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>List Products</h2>

<?php
if ($resultSet->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Product ID</th>";
    echo "<th>Product Name</th>";
    // Add other table headers based on your columns
    echo "</tr>";

    while ($row = $resultSet->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['product_id']}</td>";
        echo "<td>{$row['productName']}</td>";
        // Add other table cells based on your columns
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No products found.";
}
?>

</body>
</html>
