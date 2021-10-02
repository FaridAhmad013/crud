<?php
include '../_session.php';
include '../../database.php';
$pengurus = new Pengurus();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengurus</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>

<body>
    <?php include '../../layout/navbar.php'; ?>
    <form action="/admin/pengurus/proses.php" method="post">
        <input type="hidden" name="aksi" value="update">

        <div class="d-flex justify-content-center">

            <div class="card col-md-8">
                <div class="card-body">

                    <div class="card-title text-center">
                        <h3>Edit Pengurus</h3>
                    </div>


                    <?php foreach ($pengurus->edit($_GET['id']) as $data) { ?>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" id="">

                        <div class="form-check mb-2">
                            <label for="Nama" class="label-form-check">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['nama'] ?>">
                        </div>

                        <div class="form-check mb-2 d-flex">
                            Jenis Kelamin
                            <label for="l" class="form-check mx-3">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="l" value="Laki-laki" <?php echo $data['jenis_kelamin'] == "Laki-laki" ? 'checked' : ''; ?>>
                                Laki-laki
                            </label>
                            <label for="p" class="form-check mb-2">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="p" value="Perempuan" <?php echo $data['jenis_kelamin'] == "Perempuan" ? 'checked' : '' ?>>
                                Perempuan
                            </label>
                        </div>

                        <div class="form-check mb-2">
                        <label for="agama" class="label-form-check">Agama</label>
                        <select name="agama" id="agama" class="form-select">
                            <option value="<?php echo $data['agama'] ?>"><?php echo $data['agama'] ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">HIndu</option>
                            <option value="Budha">Budha</option>
                            <option value="Budha">BUdha</option>
                        </select>
                    </div>

                        <div class="form-check mb-2">
                            <label for="tanggal_lahir" class="label-form-check">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir'] ?>">
                        </div>

                        <div class="form-check mb-2">
                            <label for="no_telp" class="label-form-check">No Telepon</label>
                            <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?php echo $data['no_telp'] ?>">
                        </div>

                        <div class="form-check mb-2">
                            <label for="email" class="label-form-check">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $data['email'] ?>">
                        </div>

                        <div class="form-check mb-2">
                            <label for="alamat" class="label-form-check">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" ><?php echo $data['alamat'] ?></textarea>
                        </div>

                        <div class="form-check mb-2">
                        <button type="submit" name="save" class="btn btn-primary">Edit</button>
                        </div>
                        

                    <?php } ?>


                </div>
            </div>

        </div>
    </form>

    <script src="/asset/js/bootstrap.min.js"></script>

</body>

</html>