<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'db_jurusan';
  $conn = mysqli_connect($host, $user, $pass,
    $db);
  if($conn){
    //echo "Koneksi berhasil";
  }

  mysqli_select_db($conn, $db);
?>