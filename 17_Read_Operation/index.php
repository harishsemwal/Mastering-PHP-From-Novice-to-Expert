<?php
include('database.php');

# insert Query

$sql = "select * from users";
$result = $conn->query($sql);

// echo "<pre>";
// echo print_r($result);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<pre>";
        print_r($row);
    }
}

// if($result->num_rows > 0){
//     while($row = $result->fetch_assoc()){
//         echo "id: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
//     }
// }

?>