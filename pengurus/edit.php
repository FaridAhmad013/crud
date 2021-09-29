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
    <title>Edit</title>
</head>

<body>
<?php include '../layout/navbar.php';?>
    <form action="/pengurus/proses.php" method="post">
    
        <input type="hidden" name="aksi" value="update">

        <?php foreach($pengurus->edit($_GET['id']) as $data) {?>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" id="">
        <div>
            <label for="Nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo $data['nama']?>">
        </div>

        <div>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $data['jenis_kelamin']?>">
        </div>

        <div>
            <label for="agama">Agama</label>
            <input type="text" name="agama" id="agama" value="<?php echo $data['agama']?>">
        </div>

        <div>
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>">
        </div>

        <div>
            <label for="no_telp">No Telepon</label>
            <input type="number" name="no_telp" id="no_telp" value="<?php echo $data['no_telp']?>">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php  echo $data['email']?>">
        </div>

        <div>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $data['alamat']?></textarea>
        </div>
            <button type="submit" name="save">Edit</button>

        <?php }?>
    </form>
</body>

</html>