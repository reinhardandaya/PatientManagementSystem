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

            header("Location:viewpatient.php");
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
    <form method= "POST">

<?php
    
    if (isset($error['patientprofile'])) {
        $show = $error['patientprofile'];
    }else {
        $show = "";
    }
    echo $show;
?>

    <div class="containerD">
        <h2>Enter Patient's ID for resources</h2>
        <input type="text" autocomplete= "off" placeholder="Enter ID" name="PID" required> <br><br>
        <button type="submit" name= "submit">Search</button>
       
    </div> 
</form>
            
        
    </section>
    
  </section>
    
</body>
</html>