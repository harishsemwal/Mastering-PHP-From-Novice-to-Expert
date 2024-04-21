<?php
#User Define Function : it is a block of code that performs a specific task
#Syntax :
#function function_name(parameter1,parameter2,parameter3){
#    body of function
#}


# Function Defination: perticular Block of code that performs a specific task
# Function Call : Executing the function

add(16, 18);

function add($a,$b){
    $c = $a + $b;
    echo "Addition is : " . $c . "<br>";
}

add(10,20);

#Subtraction: 
echo "Subtraction: " . sub(20,10);

function sub($a,$b){
    return $a - $b;
}

?>