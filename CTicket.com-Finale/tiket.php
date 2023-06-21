<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTicket-Ticket</title>
    <link rel="stylesheet" href="css/tiket.css">
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
        <div class="text-bg">
          <h1>Ticket:</h1>
          <div class="containerTicket">
              <h1 name="tiket"></h1>
          </div>
        </div>  
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="js/subindex.js"></script>
</html>