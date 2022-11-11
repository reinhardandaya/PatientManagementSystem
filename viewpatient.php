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
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">DocPanel</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="docpage.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="docprofile.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">MyProfile</span>
          </a>
        </li>
        <li>
          <a href="searchpatient.php" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">ViewPatient</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">AddPatient</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Print</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">ViewPatient</span>
      </div>
      <div class="profile-details">
       
        <span class="admin_name">DOCTORS NAME/ID</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

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
    
  </section>
</body>
</html>