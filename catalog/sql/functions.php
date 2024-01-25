<?php
// Function to generate SQL insert query
function insertQuery($table, $data) {
    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";
    $query = "INSERT INTO $table ($columns) VALUES ($values)";
    return $query;
}

// Function to generate SQL update query
function updateQuery($table, $data, $condition) {
    // $set = "";
    // $conditions="";
    // foreach ($data as $key => $value) {
    //     $set .= "$key = '$value', ";
    // }
    // foreach ($condition as $key => $value) {
    //     $conditions .= "$key = '$value', ";
    // }
    // $set = rtrim($set, ", ");
    // $query = "UPDATE $table SET $set WHERE $conditions";
    // return $query;
}

// Function to generate SQL delete query
function deleteQuery($table, $condition) {
    $query = "DELETE FROM $table WHERE $condition";
    return $query;
}

// Function to generate SQL select query
function selectQuery($table, $columns = "*", $condition = "") {
    $query = "SELECT $columns FROM $table";
    if (!empty($condition)) {
        $query .= " WHERE $condition";
    }
    return $query;
}
?>
