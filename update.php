<?php
      require "proses.php";
      $id = $_REQUEST['id'];
      $nama  = $_REQUEST['nama'];
      $email = $_REQUEST['email'];
      $alamat = $_REQUEST['alamat'];
      $gender = $_REQUEST['gender'];
      $posisi = $_REQUEST['posisi'];
      $status = $_REQUEST['status'];
      $mysqli  = "UPDATE karyawan SET nama='$nama', email='$email', alamat='$alamat', gender='$gender', posisi='$posisi', status='$status' WHERE id='$id'";
      $result  = mysqli_query($conn, $mysqli);
      mysqli_close($conn);
    
      header("location:display.php")
?>