<!-- 2:28:00 -->


<?php
# $_POST : it is used to collect data from a form with method="post".

echo "<pre>";
print_r($_POST);
echo "</pre>";

# $_Post : it is a super global variable which is used to collect data from a form with method="post".
    #Secure
    #Data is not visible to everyone in the URL.
    #Data is not limited to 2000 characters.
    #It can not be bookmarked.
    #It should be used when the data is sensitive.
    #It should be used when the data is secure.
    #It should be used when the data is confidential.
    #It should be used when the data is critical.
    #It should be used when the data is personal.
    #It should be used when the data is important.
   

# Get Method is used to send data to the server as a query string.
    


// foreach($_GET as $key => $value){
//     echo $key . " : " . $value . "<br>";
// }
if (isset($_POST['submit'])) {
    if (empty($_POST['username'])) {
        echo "Username is required";
    } else if (empty($_POST['password'])) {
        echo "Password is required";
    } else {
        echo "Username : " . $_POST['username'];
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
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