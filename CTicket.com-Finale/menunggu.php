<?php 
    session_start();
    include 'koneksi.php';

    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit();
      }
    
    $uname = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CTicker- Order Transaction</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/menunggu.css">
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
                <a class="nav-link text-white" href="date.php">Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="transaksi.php">Buy</a>
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
    <br>
    <div class="waiting-section">
    <br>
    <h1>Order Transaction</h1>
    <h2>Wait for your order being verify</h2>
  </div>
  <div class="orders-section">
    <?php
      $query = "SELECT * FROM pemesanan WHERE uname = '$uname'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='order-item'>";
          echo "<p><strong>Nama:</strong> " . $row['nama'] . "</p>";
          echo "<p><strong>Alamat:</strong> " . $row['alamat'] . "</p>";
          echo "<p><strong>Band:</strong> " . $row['band'] . "</p>";
          echo "<p><strong>Seating:</strong> " . $row['seating'] . "</p>";
          echo "<p><strong>Harga:</strong> " . $row['harga'] . "</p>";
          echo "<p><strong>Jumlah:</strong> " . $row['jumlah'] . "</p>";
          echo "<p><strong>Total:</strong> " . $row['total'] . "</p>";
          echo "<p><strong>Metode Pembayaran:</strong> " . $row['metode'] . "</p>";
          echo "<p><strong>Status:</strong> " . $row['stat'] . "</p>";

          if ($row['stat'] === 'successful') {
            echo "<a href='tiket.php?id=" . $row['id'] . "' class='btn btn-primary'>Lihat Tiket</a>";
          }

          echo "</div>";
        }
      } else {
        echo "<p style='margin-left: 73vh; margin-top: 150px; margin-bottom: 400px'><strong>Tidak ada pesanan yang tersedia.</strong></p>";
      }
    ?>
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
    <script src="js/subindex.js"></script>
</html>
