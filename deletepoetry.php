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

$p_id = $_POST['id'];

$query="DELETE FROM poetry WHERE id=$p_id";


$result=$conn->query($query);
if($result){

    $response = array("status"=>"1","message"=>"Data DELETED successfully");
    }else{
        $response = array("status"=>"0","message"=>"Data Delete fail");

        }

        echo json_encode($response);

?>