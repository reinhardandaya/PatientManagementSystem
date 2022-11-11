<?php

include("include/connection.php");

if(isset($_POST['submit'])) {

    $patientId = $_POST['PID'];
    

    $error = array();

    if (empty($patientId)) {
        $error['patientprofile'] = "Enter Patient Id";
    }

    if (count($error)==0) {
        $query = "SELECT * FROM patientprofile WHERE PID='".$patientId."'";

        $result = mysqli_query($connect,$query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Patient log in successful')</script>";

            $_SESSION['patientprofile'] = $patientId;

            header("Location:adminviewdoctor.php");
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
    <link rel="stylesheet" href="include/styles1.css">
    <title>Welcome</title>
</head>
<body>


    <section class="docpage">
    <form method= "POST">

<?php
    
    if (isset($error['patientprofile'])) {
        $show = $error['patientprofile'];
    }else {
        $show = "";
    }
    echo $show;
?>

    <div class="containerA">
        <h2>Enter Patient's ID for resources</h2>
        <input type="text" autocomplete= "off" placeholder="Enter ID" name="PID" required> <br><br>
        <button type="submit" name= "submit">Search</button>
       
    </div> 
</form>
            
        
    </section>
    

    
</body>
</html>