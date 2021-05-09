<?php 
session_start();
include '../../login/fungsi/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$sql=mysqli_query($conn, "UPDATE user set nama='$nama', email='$email', no_hp='$no_hp', alamat='$alamat', kota='$kota', provinsi='$provinsi' WHERE id_user=$id");
header('location:../index.php?url=profil');
?>a