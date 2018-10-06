<?php 
require_once 'jobs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Proyect</title>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <header class="header">
    <div class="hero">
      <div class="wrapper li">
        <nav>
          <ul>
            <li class="mli">Menu</li>
            <li class="mli">Information</li>
            <li class="mli">Otro</li>
          </ul>
        </nav>
        <nav>
            <ul>
              <li class="mli">Logout</li>
            </ul>
          </nav>
      </div>
    </div>
  </header>
  <div class="colapse"></div>
  <div class="container">
    <div class="item">
      <div class="wrapper">
        <div class="avatar">
            <img class="img" src="../images/jasanprofile.jpg" alt="">
            <img class="img" src="images/jasanprofile.jpg" alt="">
        </div>
        <div class="info">
          <h1>Jasan Hernández</h1>
          <h2>PHP Developer</h2>
          <ul>
            <li>Mail: <a href="mailto:jasan814@mail.com" for="email">jasan814@mail.com</a> </li>
            <li>Phone: 1234567890</li>
            <li>LinkedIn: https://linkedin.com</li>
            <li>Instagram: <a href="https://www.instagram.com/jasanhdz/" target="_blank">@JasanHdz</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="wrapper line">
        <p class="sub">Carrer Summary</p>
      </div>
    </div>
    <div class="item">
      <div class="wrapper">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
    <div class="container-work">
      <div class="wrapper-work">
        <div class="work">
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
            <?php  
              for($id = 0; $id < count($jobs); $id++) {
                printJobs($jobs[$id]);
              }
            ?>
          </ul>
        </div>
        <div class="tecnologys">
            <h3 class="border-bottom-gray" >Skills & Tools</h3>
            <h4>Backend</h4>
            <ul>
              <li>PHP</li>
            </ul>
            <h4>Frontend</h4>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
            </ul>
            <h4>Frameworks</h4>
            <ul>
              <li>Laravel</li>
              <li>Bootstrap</li>
            </ul>
            <h3 class="border-bottom-gray" >Languages</h3>
            <ul>
              <li>Spanish</li>
              <li>English</li>
            </ul>
        </div>
      </div>
    </div>
    <div class="container-work">
      <div class="wrapper-work dis">
         <?php  
              for($id = 0; $id < count($projects); $id++) {
                printProject($projects[$id]);
              }
          ?>
      </div>
    </div>
</body>
</html>