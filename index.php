<?php
//Include the databse connection file 
require_once("dbConnection.php");

//Fetch data in descending order  (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM calon_siswa ORDER BY id_siswa DESC");
?>


<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Homepage</h2>
        <p>
            <a href = "add.php"> Add New Data</a>
        </p>
        <table width ='80%' border=0>
            <tr bgcolor ='#DDDDDD'>
                <td><strong>Nama</strong></td>
                <td><strong>Alamat</strong></td>
                <td><strong>Jenis Kelamin</strong></td>
                <td><strong>Agama</strong></td>
                <td><strong>Asal Sekolah</strong></td>
                <td><strong>Action</strong></td>
            </tr>
            <?php
            //Fetch the next row of a result set as an associative array
            while($res = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$res['nama']."</td>";
                echo "<td>".$res['alamat']."</td>";
                echo "<td>".$res['jenis_kelamin']."</td>";
                echo "<td>".$res['agama']."</td>";
                echo "<td>".$res['sekolah_asal']."</td>";
                echo "<td><a href=\"edit.php?id={$res['id_siswa']}\">Edit</a> | 
                      <a href=\"delete.php?id={$res['id_siswa']}\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                echo "</tr>";
            }
            ?>
            
        </table>
    </body>
</html>

