<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/styles1.css">
    <title>Document</title>
</head>
<body>

<?php
include("include/connection.php");
$doc= $_SESSION['doctor'];

$query= "SELECT * FROM doctor WHERE Doc_Id='".$doc."'";
$res= mysqli_query($connect,$query);
while ($row= mysqli_fetch_array($res)) {
    $name= $row['Doc_Name'];
    $id= $row['Doc_Id'];
    $dept= $row['Department_Id'];
    $hosp= $row['Hospital_Id'];
}
?>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">DocPanel</span>
        </div>
        <ul class="nav-links">
        <li>
          <a href="#">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="docprofile.php"  class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">MyProfile</span>
          </a>
        </li>
        <li>
          <a href="#">
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
          <a href="login.php">
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
        <span class="dashboard">MyProfile</span>
      </div>
      <div class="profile-details">
       
        <span class="admin_name">DOCTORS NAME/ID</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <section class= "docpage">
    <form method="post">
        <div class="profile">
            <h2>MyProfile</h2>
            <input type="text" placeholder= "Name" name= "Doc_Name" value= <?php echo $name;?>>
            <input type="text" placeholder= "ID" name= "Doc_Id">
            <input type="text" placeholder= "Department" name= "Department_Id">
            <input type="text" placeholder= "Hospital" name= "Hospital_Id">
        </div>
    </form>
    </section>
  </section>

    
</body>
</html>