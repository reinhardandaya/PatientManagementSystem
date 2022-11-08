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
        <div class="content">
            <h1>Welcome Administrator <br><span>To the Administrators webpage</span> <br> Navigation Center</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Culpa nihil a ea quas exercitationem eum similique corrupti hic sapiente deleniti perferendis, <br> mollitia rem nobis facere, recusandae pariatur! Asperiores, ipsa exercitationem!</p>
            <div class="form">
                <h2>Add New Administrator</h2>
                <input type="text" name="name" placeholder="Enter Administrators Name">
                <input type="number" name="ID" placeholder="Enter Administrators ID">
                <input type="text" name="hospital" placeholder="Hospital">
                <input type="password" name="password" placeholder="Set Password">
                <button class="btn"><a href="#">Register</a></button>
                <p class="link">Already registered?</p>
                <a href="#">Log in</a>
            </div>
        </div>
    </div>
</body>
</html>