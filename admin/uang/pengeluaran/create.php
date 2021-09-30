<?php
include '../../../database.php';
$saldo = new Uang();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengeluaran</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>

<body>
    <?php
    include '../../../layout/navbar.php';
    ?>

    <form action="/admin/uang/pengeluaran/proses.php" method="post">
    <input type="hidden" name="aksi" value="create">
    <?php foreach($saldo->index() as $dataId){?>
    <input type="hidden" name="id_uang" value="<?php echo $dataId['id_uang']?>">
    <?php } ?>
        <div class="d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Tambah Data Pengeluaran
                        </div>

                        <div class="form-check mb-2">
                            <label for="nama_pengeluaran" class="label-form-check">Nama Pengeluaran</label>
                            <input type="text" name="nama_pengeluaran" id="nama_pengeluaran" class="form-control">
                        </div>

                        <div class="form-check mb-2">
                            <label for="total" class="label-form-check">Total</label>
                            <?php foreach ($saldo->index() as $dataSaldo) { ?>
                                <input type="number" name="total" id="total" max="<?php echo $dataSaldo['saldo'] ?>" class="form-control">
                            <?php } ?>
                        </div>

                        <div class="form-check mb-2">
                            <label for="tanggal" class="label-form-check">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>

                        <div class="form-check mb-2">
                        <button type="submit" name="save" class="btn btn-primary">Tambah Pengeluaran</button>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>
    </form>

</body>

</html>