<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body style="text-align: center">
    <form action="index.php" method="post">
        <label for="courses">Select One Course</label> <br>
        <input type="radio" value="BTech" name="course"> BTech <br>
        <input type="radio" value="BCA" name="course"> BCA <br>
        <input type="radio" value="MCA" name="course"> MCA <br>

        <button type="submit" value="submit" name="submit">Submit</button>
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $course = $_POST['course'];

        switch($course){
            case 'BTech':
                echo "You have selected BTech";
                break;
            case 'BCA':
                echo "You have selected BCA";
                break;
            case 'MCA':
                echo "You have selected MCA";
                break;
            default:
                echo "Please select a course"; 
        }
    }
    ?>
</body>

</html>