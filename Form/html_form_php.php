<?php


// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

// Create connection
// $conn = new mysqli($servername, $username, $password);
   $conn = mysqli_connect($server_name,$username,$password);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) { //mysqli_query($conn , $sql);
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbname);

// Create the table ccc_product
$sql = "
    CREATE TABLE IF NOT EXISTS ccc_product (
            product_id INT PRIMARY KEY AUTO_INCREMENT,
            product_name VARCHAR(255) NOT NULL,
            sku VARCHAR(50) NOT NULL,
            product_type ENUM('Simple', 'Bundle') NOT NULL,
            category ENUM('Bar & Game Room', 'Bedroom', 'Decor', 'Dining & Kitchen', 'Lighting', 'Living Room', 'Mattresses', 'Office', 'Outdoor') NOT NULL,
            manufacturer_cost DECIMAL(10, 2) NOT NULL,
            shipping_cost DECIMAL(10, 2) NOT NULL,
            total_cost DECIMAL(10, 2) NOT NULL,
            price DECIMAL(10, 2) NOT NULL,
            status ENUM('Enabled', 'Disabled') NOT NULL,
            created_at DATE,
            updated_at DATE
)";
if ($conn->query($sql) === TRUE) {
    echo "Table ccc_product created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();

?>


