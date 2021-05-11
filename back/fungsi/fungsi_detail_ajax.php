<?php 
session_start();
include '../../login/fungsi/koneksi.php';
$id = $_POST['id'];
$hasilTampil = '';
$query = mysqli_query($conn, "SELECT (SELECT u.nama From user u where u.id_user = p.id_pembeli) as nama, (SELECT count(*) FROM detail_pesan d where d.id_order = p.id_order) as jml, p.* FROM pesan p where p.id_order = $id");
while ($hasil = mysqli_fetch_array($query)) {
	$hasilTampil .= "
			<table class='table'>
				<tr>
					<td>Nama</td>
					<td colspan='3'>: ".$hasil['nama']."</td>
				</tr>
				<tr>
					<td>Jumlah Produk</td>
					<td>: ".$hasil['jml']."</td>
					<td>Total Biaya</td>
					<td>: ".$hasil['biaya_produk']."</td>
				</tr>
				<tr>
					<td>Status Bayar</td>
					<td>: ".$hasil['keterangan']."</td>
					<td>Status Order</td>
					<td>: ".$hasil['status_order']."</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td colspan='3'>: ".$hasil['alamat']."</td>
				</tr>
				<tr>
					<td>Kota, Provinsi</td>
					<td colspan='3'>: ".$hasil['kota'].", ".$hasil['provinsi']."</td>
				</tr>
				<tr>
					<td>Tanggal Pesan</td>
					<td colspan='3'>: ".$hasil['tgl_pesan']."</td>
				</tr>
			</table><br><br><br>";
}
$query1 = mysqli_query($conn, "SELECT (SELECT p.nama_produk From produk p where p.id_produk = d.id_produk) as nama, d.* FROM detail_pesan d where d.id_order = $id");
$hasilTampil .= "
<table class='table'>
	<tr>
		<td>No.</td>
		<td>Produk</td>
		<td>Jumlah</td>
		<td>Subtotal</td>
	</tr>
";
$no = 1;
$total = 0;
while ($hasil = mysqli_fetch_array($query1)) {
	$hasilTampil .= "
		<tr>
			<td>".$no++."</td>
			<td>".$hasil['nama']."</td>
			<td>".$hasil['kuantitas']."</td>
			<td>".$hasil['subtotal']."</td>
		</tr>
	";
	$total += $hasil['subtotal']; 
}
$hasilTampil .= "
		<tr>
			<td colspan='3'>Total</td>
			<td>".$total."</td>
		</tr>
	</table>
";

echo json_encode($hasilTampil);
?>