<?php

include("include/connection.php");

if(isset($_POST['submit'])) {

    $patientId = $_POST['PID'];
    $password = $_POST['psw'];

    $error = array();

    if (empty($patientId)) {
        $error['patientprofile'] = "Enter Patient Id";
    }elseif (empty($password)) {
        $error['patientprofile'] = "Enter Password";
    }

    if (count($error)==0) {
        $query = "SELECT * FROM patientprofile WHERE PID='".$patientId."' AND PASS='".$password."'";

        $result = mysqli_query($connect,$query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Patient log in successful')</script>";

            $_SESSION['patientprofile'] = $patientId;

            header("Location:patientpage.php");
        }else {
            echo "<script>alert('invalid password or Patient Id')</script>";
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
        
        if (isset($error['patientprofile'])) {
            $show = $error['patientprofile'];
        }else {
            $show = "";
        }
        echo $show;
    ?>

        <div class="containerP">
            <h2>Patient?   Enter credentials to<br> Log in!</h2>
            <input type="text" autocomplete= "off" placeholder="Enter Log in ID" name="PID" required> <br><br>
            <input type="password" autocomplete= "off" placeholder="Enter Password" name="psw" required> <br><br>
            <button type="submit" name= "submit">Login</button>
            <div class="container">
                <span class="psw">Forgot password, <a href="#">click here!</a></span><br>
                <p>Dont have an account yet? Click the button below to Sign Up <br><br><a href="" class="hero-btn">SIGN UP</a></p>
            </div>
        </div> 
    </form>
</body>
</html>