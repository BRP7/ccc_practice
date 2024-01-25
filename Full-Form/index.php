<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>

<h2>Add Product</h2>

<form action="process_data.php" method="POST">
    <label for="product_name">Product Name:</label>
    <input type="text" name="pdata[product_name]" required><br>

    <label for="sku">SKU:</label>
    <input type="text" name="sku" required><br>

    <label>Product Type:</label>
    <input type="radio" name="pdata[product_type]" value="Simple" checked> Simple
    <input type="radio" name="pdata[product_type]" value="Bundle"> Bundle<br>

    <label for="category">Category:</label>

   



 <?php

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



// Fetch categories from the database
$sql = "SELECT * FROM ccc_category";
$result = $conn->query($sql);

// Check if there are categories
if ($result->num_rows > 0) {
    // Output the HTML select element
    echo '<select name="category">';
    
    // Output each category as an option
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
    }
    
    echo '</select>';
} else {
    echo 'No categories found.';
}

// Close the database connection
$conn->close();
?>
    <!-- <select name="pdata[category]" required>
        <option value="Bar & Game Room">Bar & Game Room</option>
        <option value="Bedroom">Bedroom</option>
        <option value="Decor">Decor</option>
        <option value="Dining & Kitchen">Dining & Kitchen</option>
        <option value="Lighting">Lighting</option>
        <option value="Living Room">Living Room</option>
        <option value="Mattresses">Mattresses</option>
        <option value="Office">Office</option>
        <option value="Outdoor">Outdoor</option>
    </select><br> -->

    <label for="manufacturer_cost">Manufacturer Cost:</label>
    <input type="text" name="pdata[manufacturer_cost]" required><br>

    <label for="shipping_cost">Shipping Cost:</label>
    <input type="text" name="pdata[shipping_cost]" required><br>

    <label for="total_cost">Total Cost:</label>
    <input type="text" name="pdata[total_cost]" required><br>

    <label for="price">Price:</label>
    <input type="text" name="pdata[price]" required><br>

    <label for="status">Status:</label>
    <select name="pdata[status]" required>
        <option value="Enabled">Enabled</option>
        <option value="Disabled">Disabled</option>
    </select><br>

    <label for="created_at">Created At:</label>
    <input type="date" name="pdata[created_at]" required><br>

    <label for="updated_at">Updated At:</label>
    <input type="date" name="pdata[updated_at]" required><br>

    <button type="submit" name="AddProduct">"Add Product"</button>
</form>

<br>

<a href="view_entries.php">View Last 10 Entries</a>

</body>
</html>
