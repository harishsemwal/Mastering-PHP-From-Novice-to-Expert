<?php 
# Conditional Statement
# 1. if statement
# 2. if else statement
# 3. if elseif statement
# 4. switch statement

# Relational Operator
# 1. == : equal to
# 2. === : identical
# 3. != : not equal to
# 4. <> : not equal to
# 5. !== : not identical
# 6. < : less than
# 7. > : greater than
# 8. <= : less than or equal to
# 9. >= : greater than or equal to



# 1. if statement
$a = 10;
$b = 20;

if($a == $b){
    echo "a is not equal to b";
}

echo "<br> if Done";
echo "<br>";


# 2. if else statement
if($a == $b){
    echo "a is equal to b";
}else{
    echo "a is not equal to b";
}

echo "<br> if else Done";
echo "<br>";

# 3. if elseif statement
if($a == $b){
    echo "a is equal to b";
}elseif($a < $b){
    echo "a is less than b";
}else{
    echo "a is greater than b";
}

echo "<br> elseif Done";
echo "<br>";


# 4. switch statement
# Replcement of if elseif statement

$grade = "B";

switch($grade){
    case 'A': 
        echo "You are a good student";
        break;
    case 'B': 
        echo "You are a average student";
        break;
    case 'C': 
        echo "You are a poor student";
        break;
    default:
        echo "Invalid Grade";
        break;
}



echo "<br> Here is the switch statement";
echo "<br>";

?>
