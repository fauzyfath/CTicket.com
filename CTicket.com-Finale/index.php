
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTiket</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="#">CTiket.com</a>
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
                <a class="nav-link text-white" href="#event">Event</a>
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
    <!-- Banner -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <!-- Banner Text -->
        <div class="text-bg" >
            <h1>CTiket</h1>
            <h4>Your trusted ticketing Website. </h4>
         </div>
    </div>
    <!-- Main Content Area -->
    <!-- Carousel Label -->
   <div class="label-container" id="event" align="center">
    <h1>This Month Event</h1>
   </div>

    <!-- carousel -->
    <div class="container" align="center">
        <div class="p-1">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="coldplay.php"><img src="image/Coldplay_Coloratura_Music_of_the_Spheres_Album_Terbaru_Lagu_2021_Up_Up_Yellow_Paradise_Higher_Power_mainmain.id_.jpeg" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Coldplay</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="babymetal.php"><img src="image/Babymetal.jpg" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Babymetal</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a href="jkt48.php"><img src="image/Jkt48.jpg" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jkt48</h5>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <div class="container my-5 d-grid gap-5">
        <!-- Gutter container -->
        <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3">
                <a href="transaksi.php">
                    <img src="image/Supermarket Trolley Simple Icon Isolated On White Stock Vector - Illustration of pictogram, graphic_ 150986014.jpg" alt="">
                    <h4>Buy Ticket</h4>
                </a>
               </div>
              </div>
              <div class="col">
                <div class="p-3">
                    <a href="date.php">
                        <img src="image/Calendar App Icon.jpg" alt="">
                        <h4>Event Dates</h4>
                    </a>
                </div>
              </div>
            </div>
        </div>
        <div class="main-text p-5 border">
            <h1>our commitment</h1>
            <p>
              Here on our concert website, we have a steadfast commitment to delivering an extraordinary concert experience. 
              We strive to create unforgettable moments, where music transcends boundaries and emotions soar. Our dedication to 
              excellence drives us to curate exceptional lineups, ensuring that each performance is a masterpiece in its own right. 
              We believe in the power of music to inspire, connect, and uplift, and it is our unwavering commitment to bring that magic 
              to life on stage. With meticulous attention to detail, outstanding production values, and a passion for creating an immersive 
              atmosphere, we aim to leave our audience in awe and leave an indelible mark on their hearts. Our commitment is to make every 
              concert an extraordinary journey that resonates long after the final note fades away.
            </p>
        </div>
      </div>
      <!-- sub gutter -->
      <h1 align="center">Sponsors</h1>
      <div class="container overflow-hidden text-center">
        <div class="row gx-5">
          <div class="col">
           <div class="sub-gutter p-1">
                <img src="image/bankjago.png" alt="">
           </div>
          </div>
          <div class="col">
            <div class="sub-gutter p-1">
                <img src="image/BRI.png" alt="">
            </div>
          </div>
          <div class="col">
            <div class="sub-gutter p-1">
                <img src="image/GoPay Logo.png" alt="">
            </div>
          </div>
        </div>
      </div>
  </body>
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
  <script src="js/index.js"></script>
</html>