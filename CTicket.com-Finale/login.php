<?php 
include 'koneksi.php';
session_start();

if(isset($_POST['register'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['password2']));
 
    $select_users = mysqli_query($conn, "SELECT email FROM `users` WHERE email = '$email' ") or die('query failed');
 
    if(mysqli_num_rows($select_users) > 0){
        echo '<script>alert("Akun sudah terdaftar!!!")</script>';
    }else{
       if($pass != $cpass){
        echo '<script>alert("Password tidak sesuai!!!")</script>';
       }else{
          mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$cpass')") or die('query failed');
          echo '<script>alert("Pendaftaran Sukses!")</script>';
       }
    }
}

if(isset($_POST['login'])){
    $emailing = mysqli_real_escape_string($conn, $_POST['emailing']);
    $password = mysqli_real_escape_string($conn, md5($_POST['passwording']));

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$emailing' AND password = '$password'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){
        $row = mysqli_fetch_assoc($select_users);

        if($row['email'] == $emailing){
            $_SESSION['login'] = true;
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: index.php");
        }
    } else if ($_POST['emailing'] == 'admin@admin.com') {
      header('Location: admin2.php');
    }
     else if ($_POST['emailing'] == "" && $_POST['passwording'] == ""){
      echo '<script>alert("email atau password belum diisi!")</script>';
    } else {
        echo '<script>alert("incorrect email or password!")</script>';
    }
}

if(isset($_SESSION['login'])){
  header("Location: index.php");
  exit();
}

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<form action="" method="post"> 
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                  <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">

              <!-- login -->
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Log In</h4>
                      <div class="form-group">
                        <input type="email" name="emailing" class="form-style" placeholder="Your Email" id="emailing" autocomplete="off">
                        <i class="input-icon uil uil-at"></i>
                      </div>  
                      <div class="form-group mt-2">
                        <input type="password" name="passwording" class="form-style" placeholder="Your Password" id="passwording" autocomplete="off">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <button type=submit name="login" class="btn mt-4">Login</button>
                                <p class="mb-0 mt-4 text-center"><a href="index.php" class="link">Return to homepage</a></p>
                        </div>
                      </div>
                    </div>

                <!-- registrasi -->
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Sign Up</h4>
                      <div class="form-group">
                        <input type="text" name="name" class="form-style" placeholder="Your Full Name" id="name" autocomplete="off" >
                        <i class="input-icon uil uil-user"></i>
                      </div>  
                      <div class="form-group mt-2">
                        <input type="email" name="email" class="form-style" placeholder="Your Email" id="email" autocomplete="off" >
                        <i class="input-icon uil uil-at"></i>
                      </div>  
                      <div class="form-group mt-2">
                        <input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off" >
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="password2" class="form-style" placeholder="Confirm Password" id="password2" autocomplete="off" >
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <button type=submit name="register" class="btn mt-4">submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</form>