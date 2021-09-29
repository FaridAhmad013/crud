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
    <title>Tambah data Anak</title>
</head>
<body>

    <form action="/anak/proses.php" method="post">
    <input type="hidden" name="aksi" value="create">

    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
    </div>

    <div>
        Status 
        <label for="yatim"><input type="checkbox" name="status[]" id="yatim" value="Yatim">Yatim</label>
        <label for="piatu"><input type="checkbox" name="status[]" id="piatu" value="Piatu">Piatu</label>
    </div>

    <div>
        <label for="nik">NIK</label>
        <input type="number" name="nik" id="nik">
    </div>

    <div>
        <label for="agama">Agama</label>
        <select name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghuchu">Konghuchu</option>
        </select>
    </div>

    <div>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tangga_lahir">
    </div>

    <div>
        Jenis Kelamin
        <label for="l"><input type="radio" name="jenis_kelamin" id="l" value="Laki-laki">Laki-laki</label>
        <label for="p"><input type="radio" name="jenis_kelamin" id="p" value="Perempuan">Perempuan</label>
    </div>

    <div class="">
    <label for="id_pengurus">Pengurus</label>
    <select name="id_pengurus" id="id_pengurus">
        <?php 
        foreach($pengurus->index() as $data){?>
            <option value="<?php echo $data['id']?>"><?php echo $data['nama']?></option>
        <?php }?>
    </select>
    </div>

    <button type="submit" name="save">Tambah</button>
    </form>

</body>
</html>