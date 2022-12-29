<?php 
// koneksi database
require 'proses.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
$mysqli  = "DELETE FROM karyawan WHERE id=$id";
$result  = mysqli_query($conn, $mysqli);
mysqli_close($conn);
 
if ($result) {
    echo "Hapus berhasil";
  } else {
    echo "Hapus gagal";
  }

// mengalihkan halaman kembali ke index.php
header("location:display.php");
 
?>