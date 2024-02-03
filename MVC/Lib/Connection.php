<?php
class Lib_Connection
{
    protected $_conn = null;

    public function __construct()
    {
        $this->connect();
    }

    
    public function connect()
{
    if (is_null($this->_conn)) {
        $this->_conn = mysqli_connect("localhost", "root", "", "ccc_practice");
        if ($this->_conn === false) {
            die("<h3 style='color: red;'>ERROR: Could not connect. "
                . mysqli_connect_error() . "</h3>");
        }
        
        // Add this line to indicate a successful connection
        echo "Connected to the database!";
    }

    return $this->_conn;
}



public function exec($sql)
{
    try {
        if (is_array($sql)) {
            // If $sql is an array, assume it's a result set and return it directly
            return $sql;
        } else {
            $result = $this->connect()->query($sql);

            if ($result === false) {
                // Output the SQL error for debugging
                echo "SQL Error: " . $this->connect()->error;
                return null;
            }

            return $result;
        }
    } catch (Exception $e) {
        // Output any exception messages for debugging
        echo "Exception: " . $e->getMessage();
        return null;
    }
}

public function fetchAssoc($result)
{
    if ($result !== null) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    } else {
        // Handle the case where $result is null
        return [];
    }
}

    
    // public function fetch_asso($res)
    // {
    //     if ($res !== null) {
    //         $data = [];
    //         while ($row = mysqli_fetch_assoc($res)) {
    //             $data[] = $row;
    //         }
    //         return $data;
    //     } else {
    //         // Handle the case where $res is null
    //         return [];
    //     }
    // }
    
    // public function fetchAssoc($result)
    // {
    //     return mysqli_fetch_assoc($result); // For MySQLi
    //     // or
    //     // return $result->fetch(PDO::FETCH_ASSOC); // For PDO
    // }
    
}
