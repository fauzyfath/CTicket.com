<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTiket</title>
    <link rel="stylesheet" href="css/subindex.css">
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
    <div class="containermain">
      <div class="container px-4 text-center p-md-1">
        <div class="row gx-5">
          <div class="col">
          <div class="p-3">
              <img src="image/Jkt48.jpg" alt="">
          </div>
          </div>
          <div class="col">
            <div class="p-3">
              <h1>Jkt48</h1><br>
              <p>JKT48 is an Indonesian-Japanese idol girl group whose name is derived 
                from its based city of Jakarta and the Japanese idol group AKB48. 
                Formed in 2011, the group is the first AKB48 sister group outside Japan 
                and adopts the concept of "idols you can meet", before switching to "idols 
                that will come to meet you" since April 8, 2018.</p>
              <h5>June 2 2024</h5>
                <div class="container overflow-hidden text-center">
                  <div class="row gx-5">
                    <div class="col">
                     <div class="p-3">
                      <a href="transaksi.php">
                          <img src="image/Supermarket Trolley Simple Icon Isolated On White Stock Vector - Illustration of pictogram, graphic_ 150986014.jpg" alt="">
                          <h6>Buy Ticket</h6>
                      </a>
                     </div>
                    </div>
                  </div>
            </div>
          </div>
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