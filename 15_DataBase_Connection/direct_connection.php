<?php
// stablish the contection with the database using PHP Using OOC.

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpLearning";


// Procedural way to connect to the database
# @ is used to avoid the error message.

$conn = mysqli_connect(
    $servername, 
    $username, 
    $password, 
    $database);


// Check connection
if(!$conn){
    echo "Connection Successfull";
}
else{
    echo "Connection Failed" . "<br>"; 
    echo "Error: ". mysqli_connect_error();
}


// echo "<br>";
// echo print_r($conn);

echo "<br>";

echo "Connected Outside";

?>