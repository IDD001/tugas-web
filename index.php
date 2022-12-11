<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM nilai");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

	
	
</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>ID.</th>
		<th>Aksi</th>
		<th>nama</th>
		<th>NIM</th>
		<th>Presensi</th>
		<th>Tugas</th>
		<th>UTS</th>
		<th>UAS</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="update.php?id=<?= $row["id"]; ?>">update</a> |
			<a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">delete</a>
		</td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row['presensi']; ?></td>
		<td><?= $row["tugas"]; ?></td>
		<td><?= $row["uts"]; ?></td>
		<td><?= $row["uas"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>