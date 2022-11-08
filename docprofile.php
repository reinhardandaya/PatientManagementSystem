<?php
include("include/connection.php");
if(isset($_GET['Doc_Id']))
{
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div class="profile">
            <h2>MyProfile</h2>
            <input type="text" placeholder= "Name" name= "Doc_Name" value= "<<?php  $sql="SELECT * FROM `doctor` WHERE Doc_Id='$_GET[Doc_Id]' ";
            $doctortable = mysqli_query($connect,$sql);
            $doc = mysqli_fetch_array($doctortable);
            echo 'Dr. '. $doc[Doc_Name]; ?>">
            <input type="text" placeholder= "ID" name= "Doc_Id">
            <input type="text" placeholder= "Department" name= "Department_Id">
            <input type="text" placeholder= "Hospital" name= "Hospital_Id">
        </div>
    </form>
</body>
</html>