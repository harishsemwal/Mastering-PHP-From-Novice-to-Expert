<?php 
# Operators


# Airthmatic Operator
# + - * / % **

# Assignment Operator  =,

# Comparison Operator
# ==, !=, >, <, >=, <=

# Logical Operator
# &&, ||, !

# Increment/Decrement Operator
# ++$a, --$a, $a++, $a--

# String Operator
# . (dot) 

# Array Operator
# +, ==, !=, ===, !==

# Conditional Assignment Operator
# ?:

# , (comma) Operator    // Not used in PHP

# Execution Operator
# -> (arrow) Operator

# :: (double colon) Operator

# Error Control Operator
# @ (at) Operator

# Type Operator
# instanceof Operator

# Bitwise Operator
# &, |, ^, ~, <<, >>, <<=, >>=, &=, |=, ^=

# Ternary Operator
# ?:

# Null Coalescing Operator
# ??

# Spaceship Operator
# <=>

# Concatenation Assignment Operator
# .=

# Bitwise Assignment Operator
# &=, |=, ^=, <<=, >>=

# Increment/Decrement Assignment Operator
# +=, -=, *=, /=, %=, **=

# Type Casting Operator
# (int), (integer), (bool), (boolean), (float), (double), (string), (array), (object), (unset)

# Execution Operator
# ` (backtick) Operator

# Error Control Operator
# @ (at) Operator

# Type Operator
# instanceof Operator

$a = 5;
$b = 3;

echo $a + $b;
echo "<br>";
echo $a - $b;

echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;

echo "<br>";

echo $a ** $b; // 5^3 = 125

echo "<br>";
echo $a++; // 5
echo "<br>";
echo $a; // 6

echo "<br>";
echo ++$a; // 7

echo "<br>";
echo $a--; // 7
echo "<br>";
echo $a; // 6

echo "<br>";
echo --$a; // 5

echo "<br>";
echo $a += $b; // 8
echo "<br>";

echo $a . "<br>";
echo $b . "<br>";

#Operator Precedence
# () , **, * / %, + -

$total = 4 / (2 * 3) + 5 - 1;
echo "Total" . $total; 








?>