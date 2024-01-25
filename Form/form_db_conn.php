<?php
echo "<pre>"
print($_POST[group1]);
print($_POST[group2]);
die;

//include 'filename.php';
//require 'filename.php';

    $server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname="PracticeThree";

    $conn = mysqli_connect($server_name,$username,$password,$dbname);

    //check for connection 
    if(!$conn){
         die("Sorry we fail to connect ".mysqli_connect_error());
         echo "<br>";
    }
    else{
        echo "Connection was successful.";
        echo "<br>";
    }

    // $sql = "CREATE DATABASE PracticeThree";//if database doesn't exist then The Result is : bool(true) Connection was successful. else error
    // $result = mysqli_query($conn,$sql);
    //check for db creation
    // if(!$result){
    //     echo "db doesn't created because --> " . mysqli_error($conn);
    // }else{
    //     echo "db creation successful.";
    // }
    // echo "The Result is : ";
    // echo var_dump($result);
    // echo "<br>";
     
    $tableOne = "CREATE TABLE student(
        roll_no INT  Primary Key,
        name VARCHAR(20),
        email VARCHAR(50))";
    mysqli_query($conn,$tableOne);

?>