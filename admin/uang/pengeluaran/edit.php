<?php 
include '../../../database.php';
$saldo = new Uang();
$pengeluaran = new Pengeluaran();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengeluaran</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>
<body>
<?php
    include '../../../layout/navbar.php';
    ?>

    <form action="/admin/uang/pengeluaran/proses.php" method="post">
    <input type="hidden" name="aksi" value="update">
    
    <?php foreach($saldo->index() as $dataId){?>
    <input type="hidden" name="id_uang" value="<?php echo $dataId['id_uang']?>">
    <?php } ?>
    
        <div class="d-flex justify-content-center">

        <?php foreach($pengeluaran->edit($_GET['id_pengeluaran']) as $data){?>
            <input type="hidden" name="id_pengeluaran" value="<?php echo $data['id_pengeluaran']?>">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Tambah Data Pengeluaran
                        </div>

                        <div class="form-check mb-2">
                            <label for="nama_pengeluaran" class="label-form-check">Nama Pengeluaran</label>
                            <input type="text" name="nama_pengeluaran" id="nama_pengeluaran" value="<?php echo $data['nama_pengeluaran']?>" class="form-control">
                        </div>

                        <div class="form-check mb-2">
                            <label for="total" class="label-form-check">Total</label>
                            <?php foreach ($saldo->index() as $dataSaldo) { ?>
                                <input type="number" name="total" id="total"  value="<?php echo $data['total']?>" class="form-control">
                            <?php } ?>
                        </div>

                        <div class="form-check mb-2">
                            <label for="tanggal" class="label-form-check">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" value="<?php echo $data['tanggal']?>" class="form-control">
                        </div>

                        <div class="form-check mb-2">
                        <button type="submit" name="save" class="btn btn-primary">Tambah Pengeluaran</button>
                        </div>
                        
                    </div>
                </div>

            </div>
        <?php } ?>
        </div>
    </form>

    <script src="/asset/js/bootstrap.min.js"></script>

</body>
</html>