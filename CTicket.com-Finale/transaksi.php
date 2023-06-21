<?php 
session_start();
include 'koneksi.php';

if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit();
}

if(isset($_POST['pesan'])){
  $nama = mysqli_real_escape_string($conn, $_POST['inp_nama']);
  $alamat = mysqli_real_escape_string($conn, $_POST['inp_alamat']);
  $band = mysqli_real_escape_string($conn, $_POST['inp_band']);
  $seating = mysqli_real_escape_string($conn, $_POST['seat']);
  
  $harga = 0;
  switch ($seating) {
    case 'VVIP (NUMBERED SEATING)':
      $harga = 1000000;
      break;
    case 'VIP (SEATING)':
      $harga = 500000;
      break;
    case 'FESTIVAL (STANDING)':
      $harga = 250000;
      break;
    case 'ALWAYS (STANDING)':
      $harga = 150000;
      break;
    default:
      $harga = 0;
  }

  $jumlah = mysqli_real_escape_string($conn, $_POST['inp_jumlah']);
  $total = $harga * $jumlah;
  $metode = mysqli_real_escape_string($conn, $_POST['inp_metode']);
  $rekening = mysqli_real_escape_string($conn, $_POST['inp_rek']);

  $uname = $_SESSION['user_name'];
  
  $sql = "INSERT INTO pemesanan (nama, alamat, band, seating, harga, jumlah, total, metode, rekening, uname, stat)
          VALUES ('$nama', '$alamat', '$band', '$seating', '$harga', '$jumlah', '$total', '$metode', '$rekening', '$uname', 'pending')";
  
  // Menjalankan query
  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Pemesanan berhasil dilakukan, silahkan menunggu konfirmasi")</script>';
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Menutup koneksi
  $conn->close();

  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Transaction</title>
  <link rel="stylesheet" href="css/transaksi.css">
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
    <!-- main content -->
    <div class="container">
      <!-- Banner logo -->
    <div class="text-bg" >
      <h1>CTiket</h1>
      <h4>Your trusted ticketing Website. </h4>
   </div>
      <form action="" method="POST">
       <table>
        <tr>
          <th>Name</th>
          <td><input type="text" name="inp_nama" id="inp_nama" required></td>
        </tr>
        <tr>
          <th>Address</th>
          <td><input type="text" name="inp_alamat" id="inp_alamat" required></td>
        </tr>
        <tr>
          <th>Event</th>
          <td><select id="inp_band" name="inp_band">
            <option>--CHOOSE EVENT--</option><br>
            <option value="coldplay">Coldplay</option>
            <option value="babymetal">Babymetal</option>
            <option value="jkt48">Jkt48</option>
          </select></td>
        </tr>
        <tr>
          <th>Seating</th>
          <td><select onchange="Price()" id="seat" name="seat">
            <option>--CHOOSE LEVEL--</option><br>
            <option value="VVIP (NUMBERED SEATING)">VVIP (NUMBERED SEATING)</option>
            <option value="VIP (SEATING)">VIP (SEATING)</option>
            <option value="FESTIVAL (STANDING)">FESTIVAL (STANDING)</option>
            <option value="ALWAYS (STANDING)">ALWAYS (STANDING)</option>
          </select></td>
        </tr>
        <tr>
          <th>Ticket Price</th>
          <td><input type="number" id="harga" name="harga" disabled="true"></td>
        </tr>
        <tr>
          <th>Number of Tickets</th>
          <td><input onkeyup="Total()" type="number"  id="inp_jumlah" name="inp_jumlah" required></td>
        </tr>
        <tr>
          <th>Total Price</th>
          <td><input type="text" id="total2" disabled="true" name="total2"></td>
        </tr>
        <tr>
          <th>Payment Methods</th>
          <td><select onchange="Metode()" id="inp_metode" name="inp_metode">
            <option>--CHOOSE METHODS--</option><br>
            <option value="BRI">BANK BRI</option>
            <option value="JAGO">BANK JAGO</option>
            <option value="GOPAY">GOPAY</option>
          </select></td>
        </tr>
        <tr>
          <th>Credit/Debit Card Numbers</th>
          <td><input type="text" id="inp_rek" name="inp_rek" required></td>
        </tr>
        <tr>
          <th>Destination Card number</th>
          <td><input type="text" id="rekening" disabled="true" name="rekening"></td>
        </tr>
       </table>
       <div class="btnsubmit">
        <button name="pesan" id="submit">Order</button>
       </div>
      </form>
    </div>
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
  <script type="text/javascript" src="js/transaksi.js"></script>
  <script src="js/subindex.js"></script>
</body>
</html>