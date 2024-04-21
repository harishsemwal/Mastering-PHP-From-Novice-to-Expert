<?php
# Delete Operation
include('database.php');

# Delete Query
$sql = "delete from users where id = 8";
$result = $conn->query($sql);

if($result){
    echo "Record deleted successfully";
}else{
    echo "Record not deleted";
}

?>