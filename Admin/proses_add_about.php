<?php 
include('../koneksi.php'); 
session_start();
if (!isset($_SESSION['username'])) { 
    header('location:login.php'); 
    exit; 
}

// Ambil data dari form
$about = mysqli_real_escape_string($db, $_POST['about']);

// Simpan ke database
$sql = "INSERT INTO tbl_about (about) VALUES ('$about')";
$query = mysqli_query($db, $sql);

if ($query) {
    echo "<script>alert('Data about berhasil disimpan.'); window.location='data_about.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data.'); history.back();</script>";
}
?>
