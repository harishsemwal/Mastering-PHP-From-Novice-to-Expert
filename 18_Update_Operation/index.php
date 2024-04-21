<?php
# Update Operation

include('database.php');

# Update Query
$sql = "update users set username='Rahul' where id=1";
$result = $conn->query($sql);


if($result){
    echo "Record updated successfully";
}else{
    echo "Record not updated";
}

?>