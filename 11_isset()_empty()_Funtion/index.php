<?php

# isset() : it is used to check if a variable is set or not and it returns true if variable is set and false if variable is not set

# empty() : it is used to check if a variable is empty or not ans it returns true if variable is empty and false if variable is not empty

# unset() : it is used to unset a variable or destroy a variable or delete a variable

$name = "Harish";

echo isset($name); // it will return true because $name is set.
echo empty($name); // it will return false because $name is set.
# false not view in Browser because it is empty string.

echo "<br>";

if(isset($name)){
    echo "Variable is set";
}else{
    echo "Variable is not set";
}


if(empty($name)){
    echo "Variable is empty";
}else{ 
    echo "Variable is not empty";
}



?>