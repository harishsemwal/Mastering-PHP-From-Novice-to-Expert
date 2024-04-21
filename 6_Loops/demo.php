<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <h1>Loops</h1>
    <h2>While Loop</h2>
    <?php
        $i = 1;
        while($i <= 5){
            echo "The number is " . $i . "<br>";
            $i++;
        }
    ?>
    <h2>Do While Loop</h2>
    <?php
        $i = 1;
        do{
            echo "The number is " . $i . "<br>";
            $i++;
        }while($i <= 5);
    ?>
    <h2>For Loop</h2>
    <?php
        for($i = 1; $i <= 5; $i++){
            echo "The number is " . $i . "<br>";
        }
    ?>
    <h2>Foreach Loop</h2>
    <?php
        $colors = array("red", "green", "blue", "yellow");
        foreach($colors as $value){
            echo $value . "<br>";
        }
    ?> 
</body>
</html>