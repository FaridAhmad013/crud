<?php 
          include '../../../database.php';
          $pemasukan = new Pemasukan();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data donasi</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>
<body>
    <?php include '../../../layout/navbar.php';
    ?>
    
    <form action="/admin/uang/donasi/proses.php" method="post">

        <?php foreach($pemasukan->edit($_GET['id_donasi']) as $data){?>
        <div class="d-flex justify-content-center">

        <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Edit Data </div>
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id_donasi" value="<?php echo $data['id_donasi']?>">
                <?php 
                    $saldo = new Uang();
                    
                    foreach($saldo->index() as $dataSaldo){ ?>
                        <input type="hidden" name="id_uang" value="<?php echo $dataSaldo['id_uang']?>">
                    <?php } ?>

                <div class="form-check mb-2">
                    <label for="nama" class="label-form-check">Nama Pemasukan</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama']?>">
                </div>
                <div class="form-check mb-2">
                    <label for="tanggal" class="label-form-check">Tanggal Pemasukan</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $data['tanggal']?>">
                </div>
                <div class="form-check mb-2">
                    <label for="jumlah">Jumlah Pemasukan</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="<?php echo $data['jumlah']?>">
                </div>

                <div class="form-check mb-2">
                    <button type="submit" name="save" class="btn btn-primary">Edit</button>
                </div>

            </div>
        </div>
        </div>
        </div>

        <?php } ?>
    </form>
</body>
</html>