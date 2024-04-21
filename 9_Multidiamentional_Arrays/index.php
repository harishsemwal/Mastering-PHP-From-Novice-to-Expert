<?php

# Multidiamentional Arrays : Arrays inside an array
$students = array(
    array("John", "25", "Software Engg", "100000"),
    array("Rahul", "23", "Web Developer", "80000"),
);

echo "<pre>";
print_r($students);

foreach($students as $key => $value){
    // print_r($value);
    foreach($value as $k => $v){
        echo ucwords($k) . " : " . $v . "<br>";
    }
}

?>