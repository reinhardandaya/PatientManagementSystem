<?php

include("include/connection.php");

if(isset($_POST['submit'])) {

    $adminId = $_POST['adminid'];
    $password = $_POST['psw'];

    $error = array();

    if (empty($adminId)) {
        $error['admin'] = "Enter Admin Id";
    }elseif (empty($password)) {
        $error['admin'] = "Enter Password";
    }

    if (count($error)==0) {
        $query = "SELECT * FROM admin WHERE Admin_Id='".$adminId."' AND Password='".$password."'";

        $result = mysqli_query($connect,$query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Admin log in successful')</script>";

            $_SESSION['admin'] = $adminId;

            header("Location:adminpage.php");
            exit();
        }else {
            echo "<script>alert('invalid password or Admin Id')</script>";
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
    <form method="post">
        <?php
        
        if (isset($error['admin'])) {
            $show = $error['admin'];
        }else {
            $show = "";
        }
        echo $show;
        ?>
        <div class="containerA">
            <h2>Admin?   Enter credentials to<br> Log in!</h2>
            <input type="text" placeholder="Enter Log in ID" name="adminid" required autocomplete= "off"> <br><br>
            <input type="password" placeholder="Enter Password" name="psw" required autocomplete= "off"> <br><br>
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