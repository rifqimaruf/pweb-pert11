<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <a href="index.php">Home</a>        
    <br/><br/>
    
    <form action="addAction.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Jenis kelamin</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr> 
                <td>Sekolah asal</td>
                <td><input type="text" name="sekolah_asal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>