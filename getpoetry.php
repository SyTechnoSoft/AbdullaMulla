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

$query ="SELECT * FROM poetry";


$result=$conn->query($query);

$raw=$result->fetch_all(MYSQLI_ASSOC);
if(empty($raw)){

    $response = array("status"=>"0","message"=>"Record is empety","data"=>$raw);
    }else{
        $response = array("status"=>"1","message"=>"Record Available","data"=>$raw);

        }

        echo json_encode($response);

?>