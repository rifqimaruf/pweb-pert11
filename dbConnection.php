<?php
$databaseHost = 'localhost';
$databaseName = 'db_pendaftaran_siswa';
$databaseUsername = 'root';
$databasePassword = '';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die('Connect Error: ' . mysqli_connect_error());
}
?>
