<?php
// edit.php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $id = $_POST['product_id'];

    // Connect to your database (replace these variables with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ccc_practice";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch the record based on the ID
    $sql = "SELECT * FROM ccc_product WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display a form for editing the record
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Record</title>
            <!-- Add any additional styles or scripts if needed -->
        </head>
        <body>

        <h2>Edit Product Record</h2>

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <!-- Add input fields for editing other columns -->
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>"><br>

            <!-- Add similar input fields for other columns -->

            <input type="submit" value="Update">
        </form>

        </body>
        </html>
        <?php
    } else {
        echo "Record not found";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>
