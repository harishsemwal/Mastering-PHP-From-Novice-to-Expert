<?php
$employee = array(
    "Harish" => "Software Engineer",
    "Rahul" => "Web Developer",
    "Rohit" => "Data Analyst",
    "Raj" => "Data Scientist"
);
?>

<?php

// echo "Name :" . "Designation" ;
foreach ($employee as $key => $value){

?>
    <p><b><?php echo $key ?> : </b> <?php echo $value ?> </p>
<?php
}
?>

<?php

# Associative Array Predefined Functions

# array_keys: it returns all the keys of an array

$keys = array_keys($employee);
print_r($keys);
echo "<pre>";

#array values: it returns all the values of an array
$values = array_values($employee);
print_r($values);
echo "<pre>";


#array_flip : it returns an array in which keys and values are flipped
$flip = array_flip($employee);
print_r($flip);
echo "<pre>";

#array_reverse : it returns an array in reverse order

$employee = array_reverse($employee);
print_r($employee);
echo "<pre>";

?>








?>