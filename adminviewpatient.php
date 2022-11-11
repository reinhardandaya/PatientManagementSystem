<?php
//session_start();
//$doc=$_SESSION['doctor'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="include/styles1.css">
    <title>Document</title>
</head>
<body>


    <section class="docpage">
            <h1>Patient Name: </h1>
            <p>Patient Number: </p>
        
        <div class="hospservices">
            
            <div class="hosp1">
                <h3>Medical History</h3>
                    <form method="post">
                        <div class="profile">
                            <input type="text" placeholder= "bloodgroup" name= "Doc_Name">
                            <input type="text" placeholder= "allergies" name= "Doc_Id">
                            <input type="text" placeholder= "underlying condition" name= "Department_Id">
                            <input type="text" placeholder= "weight" name= "Hospital_Id">
                            <input type="text" placeholder= "age" name= "Hospital_Id">
                        </div>
                    </form>
            </div>

            <div class="hosp2">
                <h3>Medical Report</h3>
                    <form method="post">
                        <div class="profile">
                            <input type="text" placeholder= "date of admission" name= "Doc_Name">
                            <input type="text" placeholder= "signs" name= "Doc_Id">
                            <input type="text" placeholder= "symptoms" name= "Department_Id">
                            <input type="text" placeholder= "illness duration" name= "Hospital_Id">
                            <input type="text" placeholder= "medical plan" name= "Hospital_Id">
                        </div>
                    </form>
            </div>
               
            
        </div>
    </section>
    
</body>
</html>