<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <table>
    <form action="add.php" method="post" name="form1">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </form>
    </table>
    
    <?php 
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            
            include_once('config.php');

            // $result = mysqli_query($mysqli,"INSERT INTO be (nama,kelas) VALUES ('$nama','$kelas')");
            $result = mysqli_query($mysqli, "INSERT INTO be(nama,kelas) VALUES('$nama','$kelas')");
            echo "Data Telah Ditambahkan";
            echo "<a href='index.php'>Homepage</a>";
        }
    ?>    
</body>
</html>