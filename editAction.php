<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id_siswa']);
	$name = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);	
	$jenis_kelamin = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);	
	$agama = mysqli_real_escape_string($mysqli, $_POST['agama']);	
	$asal_sekolah = mysqli_real_escape_string($mysqli, $_POST['sekolah_asal']);	
	
	// Check for empty fields
	if (empty($name) || empty($alamat) || empty ($jenis_kelamin)|| empty ($agama)|| empty ($asal_sekolah)) {
		if (empty($name)) {
			echo "<font color='red'>Nama field is empty.</font><br/>";
		}
		
		if (empty($alamat)) {
			echo "<font color='red'>Alamaat field is empty.</font><br/>";
		}
		if (empty($jenis_kelamin)) {
			echo "<font color='red'>Jenis Kelamin field is empty.</font><br/>";
		}
		if (empty($agama)) {
			echo "<font color='red'>Agama field is empty.</font><br/>";
		}
		if (empty($asal_sekolah)) {
			echo "<font color='red'>Asal Sekolah field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE calon_siswa SET `nama` = '$name', `alamat` = '$alamat', `jenis_kelamin` = '$jenis_kelamin', `agama` = '$agama', `sekolah_asal` = '$asal_sekolah'  WHERE `id_siswa` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}