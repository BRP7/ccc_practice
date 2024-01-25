<?php
include_once 'mysql_fun.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all products from the ccc_product table
$viewQuery = show($conn, 'ccc_product');

// $result = $conn->query($viewQuery);

?>

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

// Assuming $viewQuery is a valid SQL SELECT query
$resultSet = $conn->query($viewQuery);

if ($resultSet instanceof mysqli_result) {
    // Fetch and process the data here
    while ($row = $resultSet->fetch_assoc()) {
        // Process each row of data
        // ...

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Product ID</th>";
            echo "<th>Product Name</th>";
            // ... (Include other table headers)
            echo "</tr>";
        
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['product_id']}</td>";
                echo "<td>{$row['productName']}</td>";
                // ... (Include other table cells)
                echo "</tr>";
            }
        
            echo "</table>";
        } else {
            echo "No products found.";
        }
        
        // Close the database connection
        $conn->close();
    }

    // Don't forget to free the result set
    $resultSet->free_result();
} else {
    // Handle the case where the query did not return a valid result set
    echo "Error: Unable to fetch data from the database.";
}


?>

</body>
</html>
