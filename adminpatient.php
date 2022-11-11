<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="include/style.css">
</head>
<body>
    <div class="containerA">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">AdminPage</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">PATIENT</a></li>
                    <li><a href="#">DOCTOR</a></li>
                    <li><a href="#">DEPARTMENTS</a></li>
                    <li><a href="login.php">LOG OUT</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type Patients ID">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div>
            <div class="opnion">
            <a href="adminaddpatient.php"><button class="button">ADD PATIENT</button></a> <br><br>
            <a href="adminsearchpatient.php"><button class="button">VIEW PATIENT</button></a> <br><br>
            <a href=""><button class="button">REMOVE PATIENT</button></a>
            </div>
    </div>
</body>
</html>