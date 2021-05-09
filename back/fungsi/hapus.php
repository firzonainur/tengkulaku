<?php 
include '../../login/fungsi/koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM produk Where id_produk = $id");
header('location:../index.php?url=daftarProduk');
?>