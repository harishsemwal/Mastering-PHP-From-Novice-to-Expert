<?php
/*
****************** Bahut Importent Hai PHP Mai ***************

    #Database Connection:
    1. Open the XAMPP Control Panel.
    2. Start the Apache and MySQL.
    3. Open the browser and type localhost/phpmyadmin.
    4. Create a new database named 'php_tutorial'.
    5. Create a new table named 'users' with the following fields:
        - id (INT, Primary Key, Auto Increment)
        - name (VARCHAR)
        - email (VARCHAR)
        - password (VARCHAR)
    7. Create a new file named 'db.php' and write the following code:
        <?php
            $server = "localhost";

*/


// stablish the contection with the database using PHP Using OOC.

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpLearning";

// create connection

$conn = new mysqli($servername, $username, $password, $database);

// check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// die funtion is used to stop the execution of the script and show the message.

echo "Connected successfully";

?>