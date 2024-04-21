<?php
# Arrays
# 1. Indexed Arrays
# 2. Associative Arrays

# 1. Indexed Arrays : Numeric Indexes

echo "Indexed Arrays: ";

$colors = array("Red", "Green", "Blue", "Yellow");
// echo $colors[0];
// echo "<br>";
// echo $colors[1];
// echo "<br>";

foreach ($colors as $x) {
    echo $x;
    echo "<br>";
}

# Predefine Function of array

echo count($colors);
echo "<br>";

echo "Sorting: ";
sort($colors);
print_r($colors);
echo "<br>";


echo "Reversing: ";
rsort($colors);
print_r($colors);
echo "<br>";



echo "Pushing: ";
array_push($colors, "Black", "White");
foreach ($colors as $x) {
    echo $x;
    echo "<br>";
}

echo "Popping: ";
array_pop($colors);
foreach ($colors as $x) {
    echo $x;
    echo "<br>";
}

echo "Shifting: ";
array_shift($colors);
foreach ($colors as $x) {
    echo $x;
    echo "<br>";
}

echo "Unshifting: ";
array_unshift($colors, "Red");

foreach ($colors as $x) {
    echo $x;
    echo "<br>";
}

echo "Slicing: ";
$sliced = array_slice($colors, 1, 2);
print_r($sliced);
echo "<br>";



echo "Merging: ";
$numbers = array(1, 2, 3);
$merged = array_merge($colors, $numbers);
print_r($merged);
echo "<br>";


# array_reverse() : reverse index wise not alphabatically

$fruits = array("Banana", "Apple", "Orange", "Mango");
echo "Reverse: ";
print_r(array_reverse($fruits));
echo "<br>";




# 2. Associative Arrays : Key-Value Pairs 

echo "Associative Arrays: ";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
