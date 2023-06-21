<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit();
}

$sql = "SELECT * FROM pemesanan WHERE stat = 'pending'";
$result = $conn->query($sql);

// Process update request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['update']) && isset($_POST['order_id']) && isset($_POST['status'])) {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];

    // Update order status in the database
    $update_sql = "UPDATE pemesanan SET stat = '$status' WHERE id = $order_id";
    if ($conn->query($update_sql) === TRUE) {
      // Redirect to the same page to avoid form resubmission
      header("Location: admin.php");
      exit();
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="#">Admin Page</a>
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
                <a class="nav-link text-white" href="admin2.php">All order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Pending Orders</a>
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
      <h2>Pending Orders</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Band</th>
            <th>Seating</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Metode</th>
            <th>Rekening</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nama"]."</td>";
                echo "<td>".$row["alamat"]."</td>";
                echo "<td>".$row["band"]."</td>";
                echo "<td>".$row["seating"]."</td>";
                echo "<td>".$row["harga"]."</td>";
                echo "<td>".$row["jumlah"]."</td>";
                echo "<td>".$row["total"]."</td>";
                echo "<td>".$row["metode"]."</td>";
                echo "<td>".$row["rekening"]."</td>";
                echo "<td>";
                echo "<form method='POST'>";
                echo "<input type='hidden' name='order_id' value='".$row["id"]."'>";
                echo "<select name='status'>";
                echo "<option value='pending' selected>Pending</option>";
                echo "<option value='successful'>Successful</option>";
                echo "<option value='declined'>Declined</option>";
                echo "</select>";
                echo "<input type='submit' value='Update' name='update'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='11'>No pending orders found</td></tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
    <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>© 2023 All Rights Reserved kelompok 3</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
  <script src="js/subindex.js"></script>
</body>
</html>
