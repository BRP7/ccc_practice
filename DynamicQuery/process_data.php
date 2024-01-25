<?php
include 'mysql_fun.php'; // Include the file containing your insert, update, delete functions

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];
    if (isset($_POST['pdata'])) {
        $pdata = $_POST['pdata'];
        print_r($pdata); // Add this line for debugging
        // Rest of your code...
    } else {
        echo "Invalid request";
    }
    

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

   

    if ($action == "Add Product") {
        // Insert Product
        $insertQuery = insert($conn,'ccc_product', $_POST['pdata']);
        echo "<h3>$insertQuery</h3>";
        // Uncomment the next line to execute the query
        $conn->query($insertQuery);
    } elseif ($action == "Update Product") {
        // Update Product
        $updateQuery = update('ccc_product', $_POST['pdata'], ['product_id' => $_POST['product_id']]);
        echo "<h3>$updateQuery</h3>";
        // Uncomment the next line to execute the query
        $conn->query($updateQuery);
    } elseif ($action == "Delete Product") {
        // Delete Product
        $deleteQuery = delete('ccc_product', ['product_id' => $_POST['product_id']]);
        echo "<h3>$deleteQuery</h3>";
        // Uncomment the next line to execute the query
        $conn->query($deleteQuery);
    }
    elseif ($action == "View Product") {
        // View Product
        include 'view.php';
        $conn->close();
    }

  }  // Close the database connection
    
 else {
    echo "Invalid request";
}
?>
