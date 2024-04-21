<?php
# $_GET : it is used to collect data from a form with method="get".
# $_POST : it is used to collect data from a form with method="post".

echo "<pre>";
print_r($_GET);
echo "</pre>";

# $_GET is a super global variable which is used to collect data from a form with method="get".
    #Not Secure
    #Data is visible to everyone in the URL.
    #Data is limited to 2000 characters.
    #It can be bookmarked.
    #It should be used when the data is not sensitive.
    #It should be used when the data is not secure.
    #It should be used when the data is not confidential.
    #It should be used when the data is not critical.
    #It should be used when the data is not personal.
    #It should be used when the data is not important.

# Get Method Increse Security Risk.
# Get Method is used to send data to the server as a query string.

// foreach($_GET as $key => $value){
//     echo $key . " : " . $value . "<br>";
// }
if (isset($_GET['submit'])) {
    if (empty($_GET['username'])) {
        echo "Username is required";
    } else if (empty($_GET['password'])) {
        echo "Password is required";
    } else {
        echo "Username : " . $_GET['username'];
    }
}

if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo "Username : " . $username . "<br>";
    echo "Password : " . $password . "<br>";
}

echo "<br><br><br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>learning</title>
</head>

<body>
    <form action="index.php" method="get">
        <div>
            <label for="username"></label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password"></label>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <button type="submit">Log In</button>
        </div>
    </form>
    <br><br><br>
    <a href="index.php">Home</a>
</body>

</html>