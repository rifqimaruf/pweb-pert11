<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM calon_siswa WHERE id_siswa = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['nama'];
$alamat = $resultData['alamat'];
$jenis_kelamin = $resultData['jenis_kelamin'];
$agama = $resultData['agama'];
$sekolah_asal = $resultData['sekolah_asal'];
?>

<html>
<head>    
    <title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
        <a href="index.php">Home</a>
    </p>
    
    <form name="edit" method="post" action="editAction.php">
        <input type="hidden" name="id_siswa" value="<?php echo $id; ?>">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $name; ?>"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
            </tr>
            <tr> 
                <td>Jenis kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="agama" value="<?php echo $agama; ?>"></td>
            </tr>
            <tr> 
                <td>Sekolah asal</td>
                <td><input type="text" name="sekolah_asal" value="<?php echo $sekolah_asal; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
