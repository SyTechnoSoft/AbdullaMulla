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

$POETRY = $_POST['poetry_data'];
$ID = $_POST['id'];

$query = "UPDATE poetry SET poetry_data='$POETRY' WHERE id = '$ID'";




$result=$conn->query($query);
if($result==1){

    $response = array("status"=>"1","message"=>"Data Update successfully");
    }else{
        $response = array("status"=>"0","message"=>"Data Updation fail");

        }

        echo json_encode($response);

?>