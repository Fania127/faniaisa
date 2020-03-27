<?php  
// koneksi ke database
// (host, username mySql, password, nama database)
require 'functions.php';

// ambil data dari tabel mahasiswa
// (koneksi ke database, )
$result =  mysqli_query($conn, "SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style type="text/css">
		img{
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>	
		<?php $i = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $row["nrp"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>	
		<?php $i++; ?>
		<?php  endwhile; ?>	
	</table>
</body>
</html>