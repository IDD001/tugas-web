<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "nilai");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$presensi = htmlspecialchars($data["presensi"]);
	$tugas = htmlspecialchars($data["tugas"]);
	$uts = htmlspecialchars($data["uts"]);
	$uas = htmlspecialchars($data["uas"]);

	$query = "INSERT INTO nilai
				VALUES
			  ('', '$nama', '$nim', '$presensi', '$tugas', '$uts','$uas')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM nilai WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$presensi = htmlspecialchars($data["presensi"]);
	$tugas = htmlspecialchars($data["tugas"]);
	$uts = htmlspecialchars($data["uts"]);
	$uas = htmlspecialchars($data["uas"]);

	$query = "UPDATE nilai SET
				nama = '$nama',
				nim = '$nim',
				presensi = '$presensi',
				tugas = '$tugas',
				uts = '$uts',
				uas = $uas
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}















?>