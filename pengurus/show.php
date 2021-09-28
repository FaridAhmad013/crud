<?php 
    include '../database.php';

    $pengurus = new Pengurus();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        foreach($pengurus->show($_GET['id']) as $data){ ?>
            <div>
                Nama : <?php echo $data['nama']; ?>
            </div>
            
            <div>
                Jenis Kelamin : <?php echo $data['jenis_kelamin']; ?>
            </div>

            <div>
                Agama : <?php echo $data['agama']; ?>
            </div>

            <div>
                Tanggal Lahir  : <?php echo $data['tanggal_lahir']?>
            </div>

            <div>
                No Telepon : <?php echo $data['no_telp']?>
            </div>

            <div>
                Email : <?php echo $data['email']?>
            </div>

            <div>
                Alamat : <?php echo $data['alamat']?>
            </div>
       <?php }?>
</body>
</html>