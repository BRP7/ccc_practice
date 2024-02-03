<?php
class Lib_Sql_Query_Builder extends Lib_Connection
{
    public function __construct()
    {
        // echo get_class($this);
    }

    public function insert($tableName, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $value) {
            $columns[] = sprintf("`%s`", $key);
            $values[]  = sprintf("'%s'", addslashes($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values});";
    }

    function update( $table, $data, $condition) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = '$value', ";
        }
        $set = rtrim($set, ", ");
    
        $conditions = "";
        foreach ($condition as $key => $value) {
            $conditions .= "$key = '$value' AND ";
        }
        $conditions = rtrim($conditions, " AND ");
        $query = "UPDATE $table SET $set WHERE $conditions";
        return $query;
    }
    
    // Function to generate SQL delete query
    function delete( $table, $condition) {
        $whereClause = '';
        foreach ($condition as $key => $value) {
            $whereClause .= "$key = '$value' AND ";
        }
        $whereClause = rtrim($whereClause, " AND ");
        $query = "DELETE FROM $table WHERE $whereClause";
        return $query;
    }
   

    public function select($table, $fields = '*', $conditions = [])
    {
        $sql = "SELECT $fields FROM $table";

        if (!empty($conditions)) {
            $sql .= " WHERE ";
            $conditionsString = [];
            foreach ($conditions as $field => $value) {
                $conditionsString[] = "$field = '$value'";
            }
            $sql .= implode(' AND ', $conditionsString);
        }

        $result = $this->exec($sql); // Execute the query using exec
        return $this->fetchAssoc($result); // Fetch and return the results using fetchAssoc
    }



// public function fetchAssoc($result)
// {
//     if ($result !== null) {
//         $data = [];
//         while ($row = mysqli_fetch_assoc($result)) {
//             $data[] = $row;
//         }
//         return $data;
//     } else {
//         // Handle the case where $result is null
//         return [];
//     }
// }


    
}
// The Model_Abstract class provides a method getQueryBuilder that returns an instance of Lib_Sql_Query_Builder.
// The Lib_Sql_Query_Builder class extends Lib_Connection and provides a method insert for constructing SQL INSERT queries. It escapes values using addslashes to prevent SQL injection.
// The Model_Product class extends Model_Abstract and uses the inherited getQueryBuilder method to get an instance of the SQL query builder (Lib_Sql_Query_Builder).
// The save method in Model_Product constructs an SQL INSERT query using the table name and data provided. It then calls the exec method (not provided) on the query builder to execute the SQL query and save the data to the database.
// This overall flow demonstrates how the classes interact to handle database operations for the product model. The Lib_Sql_Query_Builder class is responsible for constructing SQL queries, and the Model_Product class uses it to insert data into the database.