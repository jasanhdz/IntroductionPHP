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
  <style>
    .hero,.item{justify-content:center}.colapse,.header,.hero{height:60px}body{margin:0;font-family:'Source Sans Pro',sans-serif}.header{color:#94a891;background-color:#1d252c;position:fixed;width:1500px}.hero{display:flex;width:auto}.li{justify-content:space-between}.container{display:grid;grid-template-columns:repeat(5,1fr);grid-template-rows:150px 150px 80px 100px 100px}.item{display:flex;padding:10px}.item:nth-of-type(1){grid-column-end:span 5;grid-row-end:span 2;background-color:#fff}.item:nth-of-type(2){grid-column-end:span 5;grid-row-end:span 1}.item:nth-of-type(3){grid-column-end:span 5;grid-row-end:span 2}.item:nth-of-type(4){grid-column-end:span 5;grid-row-end:span 1}.wrapper{display:flex;width:1100px;padding-bottom:10px}.avatar{padding:10px 5px;margin-right:20px}.info{padding-top:30px}.img{width:250px;height:250px;border-radius:5px}.line{border-bottom:2px solid gray}.sub{font-size:28px;margin:10px}p{font-size:18px}.container-work{display:flex;width:auto;justify-content:center;align-content:center;flex-wrap:nowrap}.wrapper-work{display:inherit;width:1100px;padding-bottom:10px;justify-content:space-between}.mli,.row{display:inline-block}.tecnologys,.work{padding:20px}.work{max-width:700px}.col-3,.row{max-width:270px}.border-bottom-gray{border-bottom:1px solid gray;font-size:25px}.row{padding:30px;max-height:570px}.col{padding:0 10px}li{font-size:18px}h4{font-size:20px}span{font-size:19px;background-color:#f08080;border-radius:4px}.mli{padding:10px 15px 10px 10px;margin-right:20px;cursor:pointer;font-size:22px}ul{align-items:center}nav{align-self:center}.mli:hover{color:#fff}.dis{flex-wrap:wrap}
  </style>
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