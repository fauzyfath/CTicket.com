<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "tubes_web";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error){
    die("Koneksi Gagal: " . $conn->connect_error);
}

?>