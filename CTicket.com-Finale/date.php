<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTiket</title>
    <link rel="stylesheet" href="css/date.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="index.php">CTiket.com</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php#event">Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="menunggu.php">Order</a>
              </li>
              <li class="nav-item">
                <form class="d-flex" role="login"> &emsp13;
                <?php
                session_start();
                if (isset($_SESSION['login'])) {
                   echo '<a href="logout.php"><button type="button" class="btn btn-outline-primary" id="btnLogout">Logout</button></a>';
                } else {
                   echo '<a href="login.php"><button type="button" class="btn btn-outline-primary" id="btnLogin">Login</button></a>';
                }
                  ?>
                </form>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- Highlight Content -->
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <a href="coldplay.php">
                <img src="image/Coldplay_Coloratura_Music_of_the_Spheres_Album_Terbaru_Lagu_2021_Up_Up_Yellow_Paradise_Higher_Power_mainmain.id_.jpeg" alt="">
            </a>
            <h1>Coldplay</h1>
            <table align="center">
                <td><img src="image/Calendar App Icon.jpg" alt=""></td>
                <td>April 18 2024</td>
            </table>
          </div>
          <div class="col">
            <a href="babymetal.php">
                <img src="image/Babymetal.jpg" alt="">
            </a>
            <h1>Babymetal</h1>
            <table align="center">
                <td><img src="image/Calendar App Icon.jpg" alt=""></td>
                <td>July 20 2024</td>
            </table>
          </div>
          <div class="col">
            <a href="jkt48.php">
                <img src="image/Jkt48.jpg" alt="">
            </a>
            <h1>Jkt48</h1>
            <table align="center">
                <td><img src="image/Calendar App Icon.jpg" alt=""></td>
                <td>June 2 2024</td>
            </table>
          </div>
        </div>
      </div>

    <!--  footer -->
   <footer>
    <div class="footer">
       <div class="copyright">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <p>© 2023 All Rights Reserved kelompok 3</a></p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <script src="js/subindex.js"></script>
  </body>
</html>