<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <?php
            //include the database connection file
            require_once("dbConnection.php");

            // Assuming $db is your connection variable
            if (isset($mysqli)){
                //escpe special characters  in string for use in SQL statement
                $name = mysqli_real_escape_string($mysqli, $_POST['nama']);
                $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
                $jenis_kelamin = mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']);
                $agama = mysqli_real_escape_string($mysqli, $_POST['agama']);
                $asal_sekolah = mysqli_real_escape_string($mysqli, $_POST['sekolah_asal']);

                //Check for empty fields
                if(empty($name) || empty($alamat) || empty ($jenis_kelamin)|| empty ($agama)|| empty ($asal_sekolah)){
                    if(empty($name)){
                        echo"<font color= 'red'>Name field is  empty.</font><br/>";
                    }
                    
                    if (empty($alamat)){
                        echo"<font color= 'red'>Alamat field is  empty.</font><br/>";
                    }
                    if (empty($jenis_kelamin)){
                        echo"<font color= 'red'>Jenis kelamin field is  empty.</font><br/>";
                    }
                    if (empty($agama)){
                        echo"<font color= 'red'>Agama field is  empty.</font><br/>";
                    }
                    if (empty($asal_sekolah)){
                        echo"<font color= 'red'>Asal sekolah field is  empty.</font><br/>";
                    }

                    //Show link to the previous page
                        echo "<br/><a  href='javascript:self.history.back();'>Go Back</a>";
                }else{
                    //if all the fields are filled (not empty)

                    //insert data into database
                    $result = mysqli_query($mysqli, "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$name', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')");

                    if (!$result) {
                        echo "Error: " . mysqli_error($mysqli);
                    } else {
                        echo "<p><font color='green'>Data added successfully!</font></p>";
                        echo "<a href='index.php'>View Result</a>";
                    }
                }
            }
        ?>
    </body>
</html>
