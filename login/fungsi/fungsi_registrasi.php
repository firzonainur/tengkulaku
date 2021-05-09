<?php 
session_start();
include 'koneksi.php';
	$sql="INSERT INTO user (email, password, level, nama) values(?, md5(?), ?, ?)";

    $check_log = $conn->prepare($sql);
    $check_log->bind_param('ssss', $username, $password, $level, $nama);

    $username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$level = $_POST['level'];

    $check_log->execute();

    $check_log->store_result();

header('location:../../index.php');
?>