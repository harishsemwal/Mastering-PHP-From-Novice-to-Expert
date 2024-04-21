<?php
# Associative Multidiamentional Arrays
# it also coverd in prevoius file

$employee = array("Software Engg", "Web Developer", "Data Analyst", "Data Scientist");
$employee['Name'] = "John";
$employee['Age'] = 25;
$employee['Salary'] = 100000;

echo $employee['Name'];



$emp = array(
    'Name' => 'John',
    'Age' => 25,
    'Salary' => 100000,
    'Designation' => 'Software Engg'
);

echo "<pre>";
print_r($emp);
echo "</pre>";

foreach ($emp as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

?>