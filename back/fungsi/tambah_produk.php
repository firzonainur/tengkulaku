<?php 
session_start();
include '../../login/fungsi/koneksi.php';
	$sql="INSERT INTO produk (nama_produk, harga, stok, deskripsi, id_kategori, tgl_upload, verifikasi, id_user, foto) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $check_log = $conn->prepare($sql);
    $check_log->bind_param('siisissis', $nama, $harga, $stok, $deskripsi, $kategori, $upload, $verif, $id_user, $renameFile);

    $nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$deskripsi = $_POST['deskripsi'];
	$kategori = $_POST['kategori'];
	$upload = date('Y-m-d');
	$verif = "diproses";
	$id_user = $_SESSION['id_user'];

	$gambar = $_FILES['gambar']['name'];
	$x = explode('.', $gambar);
	$ekstensi = strtolower(end($x));
	$renameFile = $nama . $_SESSION['id_user'] . uniqid(). '.' . $ekstensi;
	$file_tmp = $_FILES['gambar']['tmp_name'];
	$target_dir = "../img/produk/".$renameFile;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$target_dir);

    $check_log->execute();

    $check_log->store_result();

header('location:../index.php?url=daftarProduk');
?>