<?php

# insert Operation in PHP
include('database.php');

#insert Query

$date = date('Y-m-d H:i:s');
$sql = "insert into users (username, password, created_at)
        values ('Harish', 'Harish123@', '$date')";

$conn->query($sql);

if($conn->query($sql) == TRUE){
    echo "New record created successfully";
}
else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}