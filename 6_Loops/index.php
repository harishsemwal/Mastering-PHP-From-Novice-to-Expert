<?php
# Loops
# 1. For Loop
# 2. While Loop
# 3. Do While Loop
# 4. Foreach Loop


# 1. For Loop
echo "For Loop: ";
for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo "<br>";
}


# 2. While Loop
echo "While Loop: ";
$i = 0;
while ($i < 10) {
    echo $i;
    echo "<br>";
    $i++;
}


# 3. Do While Loop
echo "Do While Loop: ";
$i = 0;
do {
    echo $i;
    echo "<br>";
    $i++;
} while ($i < 10);


# 4. Foreach Loop
echo "Foreach Loop: ";
$colors = array("Red", "Green", "Blue", "Yellow");
foreach ($colors as $value) {
    echo $value;
    echo "<br>";
}

?>