<?php
  include "proses.php";
  $id = $_REQUEST['id'];
  $nama  = $_REQUEST['nama'];
  $email = $_REQUEST['email'];
  $alamat = $_REQUEST['alamat'];
  $gender = $_REQUEST['gender'];
  $posisi = $_REQUEST['posisi'];
  $status = $_REQUEST['status'];
  $mysqli  = "INSERT INTO karyawan (nama, email, alamat, gender, posisi, status) VALUES ('$nama', '$email', '$alamat', '$gender', '$posisi', '$status')";
  $result  = mysqli_query($conn, $mysqli);
  mysqli_close($conn);

  header("location:display.php")
?>