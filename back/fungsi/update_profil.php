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
$gambar = $_FILES['gambar']['name'];
	$x = explode('.', $gambar);
	$ekstensi = strtolower(end($x));
	$renameFile = $nama . uniqid(). '.' . $ekstensi;
	$file_tmp = $_FILES['gambar']['tmp_name'];
	$target_dir = "../img/profil/".$renameFile;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$target_dir);
$foto = $renameFile;

$sql=mysqli_query($conn, "UPDATE user set nama='$nama', email='$email', no_hp='$no_hp', alamat='$alamat', kota='$kota', provinsi='$provinsi', profil='$foto' WHERE id_user=$id");
header('location:../index.php?url=profil');
?>a