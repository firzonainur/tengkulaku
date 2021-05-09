<?php 
session_start();
include '../../login/fungsi/koneksi.php';
$id=$_GET['id'];
$sql = mysqli_query($conn, "UPDATE produk SET verifikasi='Diterima' WHERE id_produk=$id;");
header('location:../index.php?url=daftarProdukAdmin');
 ?>