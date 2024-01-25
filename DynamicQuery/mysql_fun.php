<?php
// function insert($conn, $table_name, $data)
// {
//     $columns = $VALUES = [];
//     foreach ($data as $col => $val) {
//         $columns[] = "`$col`";
//         $VALUES[] = "'$val'";
//     }
//     $columns = implode(", ", $columns);
//     $value = implode(", ", $VALUES);
//     echo "<h3> INSERT INTO $table_name ($columns) VALUES ($value) </h3>";
//     $stmt = $conn->prepare("INSERT INTO $table_name {$columns} VALUES {$value}");

//     // $stmt->execute();
//     return $stmt;

//     // Check for success
//     if ($stmt->affected_rows > 0) {
//         echo "<h2 style='color: green;'>Data stored in the database successfully.</h2>";
//     } else {
//         echo "<h2 style='color: red;'>ERROR: Unable to insert data into the database.</h2>";
//     }

//     // Close statement
//     $stmt->close();
// }

function insert($conn, $tableName, $data)
{
    $columns = $values = [];
    foreach ($data as $_field => $_value) {
        // Ensure that $_field is a valid column name in your table
        // If your column names have spaces or special characters, use backticks around them
        $columns[] = "`{$_field}`";
        $values[] = "'".addslashes($_value)."'";
    } 
    $columns = implode(", ", $columns);
    $values = implode(", ", $values);

    $sqlQuery = "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";

    return $sqlQuery;
}

function show($conn, $table_name) {
    $sql = "SELECT * FROM {$table_name} LIMIT 10";
    
    // Use a prepared statement to avoid SQL injection
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $number); // Assuming $number is an integer
    $stmt->execute();

    return $stmt->get_result();
}





function update($table_name, $data = [], $where = [])
{
    $columns = $whereCond = [];
    foreach ($data as $field => $vale) {
        $columns[] = " `$field` = '$vale'";
    }

    foreach ($where as $field => $vale) {
        $whereCond[] = " `$field` = '$vale'";
    }
    $columns = implode(",", $columns);
    $whereCond = implode(" AND ", $whereCond);

    // echo "<h3> UPDATE {$table_name} SET {$columns} WHERE {$whereCond} </h3>";
    
    $stmt = "UPDATE {$table_name} SET {$columns} WHERE {$whereCond} ";
    return $stmt;
}
update("ccc_product", ['productName' => 'Table', 'productType' => 'Bundle'], ['proctuctname' => '55', 'productType' => 'Simple']);

function delete($table_name, $where = []){
    $whereCond = [];
    foreach ($where as $field => $vale) {
        $whereCond[] = " `$field` = '$vale'";
    }
    $whereCond = implode(" AND ", $whereCond);

    echo "<h3> DELETE FROM {$table_name} WHERE {$whereCond} </h3>";
}
delete("ccc_product", ['product_name' => '55', 'product_type' => 'Simple']);
// die();



// echo "<pre>";
// $pdata = $_POST['pdata']; 
// // $cdata = $_POST['cdata'];
//  print_r($_POST);

// print_r($pdata);
// print_r($cdata);

// function insert($tableName, $data){
// $columns= $values =[];
// foreach ($data as $_field => $_value) {
// $columns[] ="`{$_field}`";
// $values[]= "'".addslashes($_value)."'";
// } 
// $columns= implode(",",$columns);
// $values =implode(",", $values);
// return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";
// }
// insert('prduct tbl', $pdata);
// echo "<br>";
// insert('category_tbl', $cdata);

?>
