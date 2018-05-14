<?php
$servername = 'localhost';
$username = 'root';
$password ='tamuno33';
$database ='project1';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("connection failed:" .$conn->connect_error);
}
else{
    // echo "You are connected to the database successfully";
}



?>
