<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="input_Food">Select You Fevorite Dishes</label> <br>
        <input type="checkbox" value="Chauwmin" name="foods[]"> Chauwmin <br>
        <input type="checkbox" value="Momos" name="foods[]"> Momos <br>
        <input type="checkbox" value="Samosa" name="foods[]"> Samosa <br>
        <input type="checkbox" value="Paties" name="foods[]"> Paties <br>

                                <!-- NOTE: -->
        <!-- if we will not provide an array index foods[] then only the last selected value will be stored in the foods variable. -->

        <button type="submit" value="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $foods = $_POST['foods'];
        // echo "<pre>";
        // echo print_r($foods);
        foreach($foods as $food){
            echo "You have selected $food <br>";
        }
    }
    ?>
</body>

</html>