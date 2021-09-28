<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengurus</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
            include '../database.php';

            $pengurus = new Pengurus();
            
            foreach ($pengurus->index() as $data) {
            ?>
        <tr>
            <td><?php echo $index+=1;?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin']?></td>
            <td><?php echo $data['agama']?></td>
            <td><?php echo $data['tanggal_lahir']?></td>
            <td><?php echo $data['no_telp']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['alamat']?></td>
            <td><a href="/pengurus/show.php?id=<?php echo $data['id']?>">Show</a></td>
            <td><a href="/pengurus/edit.php?id=<?php echo $data['id']?>">Edit</a></td>
            <td></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>