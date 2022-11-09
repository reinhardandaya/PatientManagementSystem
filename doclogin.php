<?php
session_start();
include("include/connection.php");

if(isset($_POST['submit'])) {

    $docid = $_POST['docId'];
    $password = $_POST['psw'];

    $error = array();

    if (empty($docid)) {
        $error['doctor'] = "Enter Doctor Id";
    }elseif (empty($password)) {
        $error['doctor'] = "Enter Password";
    }

    if (count($error)==0) {
        $query = "SELECT * FROM doctor WHERE Doc_Id='".$docid."' AND Password='".$password."'";

        $result = mysqli_query($connect,$query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Doctor log in successful')</script>";

            $_SESSION['doctor'] = $docid;

            header("Location:docpage.php");
        }else {
            echo "<script>alert('invalid password or Doctor Id')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/style.css">
    <title>Welcome</title>
</head>
<body>
    <form method= "POST">

    <?php
        
        if (isset($error['doctor'])) {
            $show = $error['doctor'];
        }else {
            $show = "";
        }
        echo $show;
        ?>

        <div class="containerD">
            <h2>HealthCare Provider?   Enter credentials to<br> Log in!</h2>
            <input type="text" placeholder="Enter Log in ID" required autocomplete= "off" name="docId" required> <br><br>
            <input type="password" placeholder="Enter Password" required autocomplete= "off" name="psw" required> <br><br>
            <button type="submit" name="submit">Login</button>
            <div class="container">
                <span class="psw">Forgot password, <a href="#">click here!</a></span>
            </div>
        </div>
    </form>
 
</body>
 
</html>
</body>
</html>