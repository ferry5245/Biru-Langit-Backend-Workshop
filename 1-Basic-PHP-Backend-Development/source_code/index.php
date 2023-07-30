<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <th>Nama</th>
        <th>Kelas</th>
        <th>Fitur</th>
        <?php 
            include_once('config.php');
            $result = mysqli_query($mysqli,'SELECT * FROM be');
            while($data = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?=$data['nama'] ?></td>
                    <td><?=$data['kelas'] ?></td>
                    <td><a href="edit.php?id=<?=$data['id']?>">Edit</a> | <a href="delete.php?id=<?=$data['id']?>">Hapus</a></td>
                </tr>
                
            <?php }
        ?>
    </table>
    <a href="add.php">Tambah Data</a>
    
</body>
</html>