<?php 
	session_start();
	include '../../login/fungsi/koneksi.php';
	if(isset($_GET['page'])){
		switch ($_GET['page']) {
			case 'beli':
				$idP = $_POST['idP'];
				$idU = $_POST['idU'];
				$query1 = mysqli_query($conn, "SELECT nama_produk, harga, stok, id_user as idSeller FROM produk where id_produk = $idP");
				$hasil1 = mysqli_fetch_array($query1);
				$query2 = mysqli_query($conn, "SELECT alamat, kota, provinsi FROM user where id_user = $idU");
				$hasil2 = mysqli_fetch_array($query2);
				$hasil = array_merge($hasil1, $hasil2);
				echo json_encode($hasil);
				break;
			case 'keranjang':
				$idP = $_POST['idP'];
				$query = mysqli_query($conn, "SELECT nama_produk, harga, stok, id_user as idSeller FROM produk where id_produk = $idP");
				$hasil = mysqli_fetch_array($query);
				echo json_encode($hasil);
				break;
			case 'baskett':
				$idU = $_POST['idU'];
				$query = mysqli_query($conn, "SELECT alamat, kota, provinsi FROM user where id_user = $idU");
				$hasil = mysqli_fetch_array($query);
				echo json_encode($hasil);
				break;
			case 'tumbas':
				$query = "INSERT into pesan (id_pembeli, tgl_pesan, status_order, metode_kirim, biaya_kirim, biaya_produk, total,  metode_bayar, keterangan, alamat, kota, provinsi) values (?,?,?,?,?,?,?,?,?,?,?,?)";
				$cek_log = $conn->prepare($query);
				$cek_log->bind_param('issiiiiissss', $id_pembeli, $tgl, $status, $MK, $ongkir, $biaya_produk, $total, $MB, $ket, $alamat, $kota, $prov);
				$id_pembeli = $_SESSION['id_user'];
				$tgl = date('Y-m-d');
				$status = 'diproses';
				$pecah = explode("/", $_POST['metodekirim']);
				$MK = $pecah[0];
				$ongkir = $pecah[1];
				$biaya_produk = $_POST['total'];
				$MB = $_POST['metodebayar'];
				$total = $_POST['totalA'];
				$ket = 'proses';
				$alamat = $_POST['alamat'];
				$kota = $_POST['kota'];
				$prov = $_POST['provinsi'];
				$cek_log->execute();
				$cek_log->store_result();

				$query0 = mysqli_query($conn, "SELECT id_order FROM pesan WHERE id_pembeli = $id_pembeli and tgl_pesan = '$tgl' and total = $total and alamat = '$alamat' and kota = '$kota' and provinsi = '$prov'");
				$hasil = mysqli_fetch_row($query0);
				$query1 = "INSERT into detail_pesan (id_order, id_produk, id_seller, kuantitas, subtotal) values (?,?,?,?,?)";
				$cek_log1 = $conn->prepare($query1);
				$cek_log1->bind_param('iiiii', $id_order, $id_produk, $id_seller, $jml, $sub);
				$id_order = $hasil[0];
				$id_produk = $_POST['id_produk'];
				$jml = $_POST['jml'];
				$sub = $_POST['total'];
				$id_seller = $_POST['id_seller'];
				$cek_log1->execute();
				$cek_log1->store_result();

				$query2 = mysqli_query($conn, "SELECT stok FROM produk WHERE id_produk = $id_produk");
				$hasil0 = mysqli_fetch_row($query2);
				$update = $hasil0[0] - $jml;
				$query2 = mysqli_query($conn, "UPDATE produk set stok = $update WHERE id_produk = $id_produk");

				header('location:../../index.php');
				break;
			case 'masukKranjang':
				$query = "INSERT into keranjang (id_user, id_produk, id_seller, kuantitas, subtotal) values (?,?,?,?,?)";
				$cek_log = $conn->prepare($query);
				$cek_log->bind_param('iiiii', $id_pembeli, $id_produk, $id_seller, $jml, $total);
				$id_pembeli = $_SESSION['id_user'];
				$id_produk = $_POST['id_produk'];
				$id_seller = $_POST['id_seller'];
				$jml = $_POST['jml'];
				$total = $_POST['total'];
				$cek_log->execute();
				$cek_log->store_result();
				header('location:../../index.php?url=basket');
				break;
			case 'tumbasKeranjang':
				$query = "INSERT into pesan (id_pembeli, tgl_pesan, status_order, biaya_kirim, biaya_produk, total, keterangan, alamat, kota, provinsi, metode_kirim, metode_bayar) values (?,?,?,?,?,?,?,?,?,?,?,?)";
				$cek_log = $conn->prepare($query);
				$cek_log->bind_param('issiiissssii', $id_pembeli, $tgl, $status, $ongkir, $biaya_produk, $total, $ket, $alamat, $kota, $prov, $MK, $MB);
				$id_pembeli = $_SESSION['id_user'];
				$tgl = date('Y-m-d');
				$status = 'diproses';
				$pecah = explode("/", $_POST['metodekirim']);
				$MK = $pecah[0];
				$ongkir = $pecah[1];
				$biaya_produk = $_POST['total'];
				$MB = $_POST['metodebayar'];
				$total = $_POST['totalA'];
				$ket = 'proses';
				$query0 = mysqli_query($conn, "SELECT alamat, kota, provinsi FROM user where id_user = $id_pembeli");
				$hasil0 = mysqli_fetch_row($query0);
				$alamat = $hasil0[0];
				$kota = $hasil0[1];
				$prov = $hasil0[2];
				$cek_log->execute();
				$cek_log->store_result();

				$query1 = mysqli_query($conn, "SELECT id_order FROM pesan WHERE id_pembeli = $id_pembeli and tgl_pesan = '$tgl' and total = $total and alamat = '$alamat' and kota = '$kota' and provinsi = '$prov'");
				$hasil1 = mysqli_fetch_row($query1);
				$query2 = mysqli_query($conn, "SELECT * FROM keranjang WHERE id_user = $id_pembeli");
				while ($hasil2 = mysqli_fetch_array($query2)) {
					$query3 = "INSERT into detail_pesan (id_order, id_produk, id_seller, kuantitas, subtotal) values (?,?,?,?,?)";
					$cek_log1 = $conn->prepare($query3);
					$cek_log1->bind_param('iiiii', $id_order, $id_produk, $id_seller, $jml, $sub);
					$id_order = $hasil1[0];
					$id_produk = $hasil2['id_produk'];
					$jml = $hasil2['kuantitas'];
					$sub = $hasil2['subtotal'];
					$id_seller = $hasil2['id_seller'];
					
					$query4 = mysqli_query($conn, "SELECT stok FROM produk WHERE id_produk = $id_produk");
					$hasil3 = mysqli_fetch_row($query4);
					$update = $hasil3[0] - $jml;
					$query5 = mysqli_query($conn, "UPDATE produk set stok = $update WHERE id_produk = $id_produk");
					$query6 = mysqli_query($conn, "DELETE from keranjang where id_produk = $id_produk and id_user = $id_pembeli");
					$cek_log1->execute();
					$cek_log1->store_result();
				}


				// header('location:../../index.php');
				break;
			default:
				# code...
				break;
		}
	}

?>