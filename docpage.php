<?php
session_start();
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
          <a href="docpage.php" class="active">
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
          <a href="searchpatient.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">ViewPatient</span>
          </a>
        </li>
        <li>
          <a href="addpatient.php" class="active">
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
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
       
        <span class="admin_name">DOCTORS NAME/ID</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <section class="docpage">
        <h1>
            Learn About Key services Offered By some Major Hospitals
        </h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime repellendus placeat rerum eos delectus, doloribus ex vitae accusamus pariatur eaque blanditiis repellat quas nulla, natus error voluptatum enim ea atque.
        </p>
        <div class="hospservices">
            <div class="hosp1">
                <h3>MP SHAH HOSPITAL</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi voluptates ab dolor aliquid corporis, animi, sit totam necessitatibus doloremque, laboriosam tempore dolorum enim? Soluta repellendus earum officiis quibusdam sint blanditiis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vitae, voluptate natus ducimus similique nihil labore nam, perspiciatis eius expedita, a est eligendi alias assumenda eveniet harum aut! Quia, quaerat?
                </p><br>
                <a href="#" class="hero-btn">Click here to Learn more</a>
            </div>

            <div class="hosp2">
                <h3>THE NAZARETH HOSPITAL</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi voluptates ab dolor aliquid corporis, animi, sit totam necessitatibus doloremque, laboriosam tempore dolorum enim? Soluta repellendus earum officiis quibusdam sint blanditiis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vitae, voluptate natus ducimus similique nihil labore nam, perspiciatis eius expedita, a est eligendi alias assumenda eveniet harum aut! Quia, quaerat?
                </p><br>
                <a href="#" class="hero-btn">Click here to Learn more</a>
            </div>

            <div class="hosp3">
                <h3>THE AAR HOSPITAL</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi voluptates ab dolor aliquid corporis, animi, sit totam necessitatibus doloremque, laboriosam tempore dolorum enim? Soluta repellendus earum officiis quibusdam sint blanditiis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vitae, voluptate natus ducimus similique nihil labore nam, perspiciatis eius expedita, a est eligendi alias assumenda eveniet harum aut! Quia, quaerat?
                </p><br>
                <a href="#" class="hero-btn">Click here to Learn more</a>
            </div>
      
            <div class="hosp4">
                <h3>THE KAREN HOSPITAL</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi voluptates ab dolor aliquid corporis, animi, sit totam necessitatibus doloremque, laboriosam tempore dolorum enim? Soluta repellendus earum officiis quibusdam sint blanditiis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe vitae, voluptate natus ducimus similique nihil labore nam, perspiciatis eius expedita, a est eligendi alias assumenda eveniet harum aut! Quia, quaerat?
                </p><br>
                <a href="#" class="hero-btn">Click here to Learn more</a>
            </div>
               
            
        </div>
    </section>
    
  </section>
</body>
</html>