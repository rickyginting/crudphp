<?Php
require 'function.php';
// ambil data (query) dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol ditekan
if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
	<h1> Daftar Nama Mahasiswa </h1>
	<a href="tambah.php"> Tambah data mahasiswaa</a>
	<br>
	<br>
	<form action="" method="POST">
		<input type="text" name="keyword" size="48" autofocus placeholder="masukan keyword pencarian">
		<button type="submit" name="cari"> cari</button>
	</form>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $mhs) :$i++; ?>
		<tr>
			<td> <?= $i++ ?></td>
			<td> <?=$mhs ["nama"]; ?> </td>
			<td> <?=$mhs ["nim"]; ?> </td>
			<td> <?=$mhs ["jurusan"]; ?> </td>
			<td><a href="ubah.php?id=<?= $mhs ["id"]; ?> "> Edit </a> || <a href="hapus.php?id=<?= $mhs ["id"]; ?> ">Hapus</a> </td>
		</tr>
		<?php $i++; ?>
		<?php endforeach ; ?>
	</table>

</body>
</html>
