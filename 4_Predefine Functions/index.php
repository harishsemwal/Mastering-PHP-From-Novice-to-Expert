<?php 
# Predefine Functions
# 1. string function
# 2. number function
# 3. math function
# 4. array function
# 5. date function
# 6. file function
# 7. file system function
# 8. php function

# 1. string function
# strlen() - length of string   
$name = "Harish Semwal";
echo $name;
echo "<br>";
echo strlen($name); 
echo "<br>";

#str_replace
$name.str_replace("Harish", "Hari", $name);
echo $name;
echo "<br>";

# str_ireplace()
$name.str_ireplace("semwal", "Prasad", $name);
echo $name; // it does not check the case sensitive
echo "<br>";

# ucwords()
echo ucwords($name); // it will capitalize the first letter of each word
echo "<br>";

# ucfirst()
echo ucfirst($name); // it will capitalize the first letter of the first word
echo "<br>";

# strtolower()
echo strtolower($name); // it will convert the string into lowercase

# strtoupper()
echo "<br>";
echo strtoupper($name); // it will convert the string into uppercase


#str_word_count
echo "<br>";
echo str_word_count($name); // it will count the number of words in the string


# 2. number function

$num = 10.5;
echo "<br>";
echo $num;

#var_dump() // it return data type and value
var_dump($num); // float(10.5)

var_dump(is_int($num)); // it will return false
var_dump(is_float($num)); // it will return true

$num2 = 100;
var_dump(is_numeric($num2)); // it will return true it verify weather the value is number or not

// id the num = "100" then it will return true
// if the num = "100.5" then it will return true

# 3. math function

echo "<br>";
echo pi(); // it will return the value of pi
echo "<br>";

$num = -54;
echo abs($num); 
echo "<br>";

echo pow(2, 3); // 2^3 = 8
echo "<br>";

echo sqrt(16); // it will return the square root of the number

echo max(2, 3, 4, 5, 6, 7, 8, 9, 10); // it will return the maximum number

echo min(2, 3, 4, 5, 6, 7, 8, 9, 10); // it will return the minimum number

echo round(3.4); // it will return 3

echo round(3.5); // it will return 4


# rand
echo rand(1, 100); // it will return the random number between 1 to 100

// 1 se 100 ke bich me koi bhi random number generate karega

# 4. array function 

$arr = array("php", "c", "c++", "java", "python");
echo "<br>";
echo count($arr); // it will return the number of elements in the array

echo "<br>";
echo array_sum($arr); // it will return the sum of the array

echo "<br>";
echo array_product($arr); // it will return the product of the array

echo "<br>";
print_r(array_reverse($arr)); // it will return the reverse of the array

echo "<br>";

$arr1 = array("php", "c", "c++", "java", "python");

$arr2 = array("php", "c", "c++", "java", "python");

var_dump(array_diff($arr1, $arr2)); // it will return the difference between the two arrays


# 5. date function

echo "<br>";
echo date("d/m/Y"); // it will return the current date
    # d - day
    # m - month
    # Y - year

echo "<br>";


echo date("d/m/Y", strtotime("tomorrow")); // it will return the date of tomorrow



echo "<br>";
echo date("d/m/Y", strtotime("+1 day")); // it will return the date of tomorrow

echo "<br>";

echo date("d/m/Y", strtotime("+1 week")); // it will return the date of next week

echo "<br>";

echo date("d/m/Y", strtotime("+1 week 2 days 3 hours 4 minutes 5 seconds")); // it will return the date of next week

echo "<br>";

echo date("d/m/Y", strtotime("next sunday")); // it will return the date of next sunday


# 6. file function

echo "<br>";
echo file_exists("harish.txt"); // it will return true if the file exists

echo "<br>";
echo filesize("harish.txt"); // it will return the size of the file

echo "<br>";
echo file_get_contents("harish.txt"); // it will return the content of the file

echo "<br>";
echo file_put_contents("harish.txt", "Hello, I am Harish Semwal"); // it will write the content in the file

echo "<br>";

echo "<br>";

echo file_put_contents("harish.txt", "Hello, I am Harish Semwal", FILE_APPEND); // it will append the content in the file

echo "<br>";

# PHP Functions

function hello(){
    echo "Hello, I am Harish Semwal";
}

hello();

echo "<br>";

function sum($a, $b){
    echo $a + $b;
}

sum(10, 20);
echo "<br>"; // it will return 30


// *********************** Function Done ************************
// **********************Jay Bajrang Bali ***********************















?>