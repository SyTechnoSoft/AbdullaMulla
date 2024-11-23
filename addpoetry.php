<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "poetrydb";


$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$POETRY = $_POST['poetry'];
$POET_NAME = $_POST['poet_name'];

$query = "INSERT INTO poetry(poetry_data,poet_name)VALUES('$POETRY','$POET_NAME')";

$result=$conn->query($query);
if($result==1){

    $response = array("status"=>"1","message"=>"Data inserted successfully");
    echo "Data inserted successfully";
    }else{
        $response = array("status"=>"0","message"=>"Data insertion fail");

        echo "Data insertion failed";
        }

        echo json_encode($response);

?>