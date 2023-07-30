<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            
            include_once('config.php');
            // $result = mysqli_query($mysqli,"INSERT INTO be (nama,kelas) VALUES ('$nama','$kelas')");
            $result = mysqli_query($mysqli, "UPDATE be SET nama = '$nama',kelas = '$kelas' WHERE id=$id");
            header("Location:index.php");
        }
    ?>    
    <?php 
    include_once('config.php');
    $id = $_GET['id'];
 
    // Fetech user data based on id
    $result = mysqli_query($mysqli, "SELECT * FROM be WHERE id=$id");
     
    while($data = mysqli_fetch_array($result))
    {
        $nama = $data['nama'];
        $kelas = $data['kelas'];
    }
     ?>
    <table>
    <form action="edit.php" method="post" name="update">
        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?=$nama?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" value="<?=$kelas?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </form>
    </table>
    
    
</body>
</html>