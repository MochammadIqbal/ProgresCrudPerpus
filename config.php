<?php
  $db_host = "127.0.0.1";
  $db_user = "root";
  $db_pass = "";
  $db_name = "moklet_perpustakaan";
  $koneksi = mysqli_connect("localhost","root","","moklet_perpustakaan");
  //check conection
  if (mysqli_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
      } else {
        echo "Koneksi Database Berhasil";
      }
?>
