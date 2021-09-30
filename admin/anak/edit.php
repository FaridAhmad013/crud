<?php 
include '../_session.php';
include '../../database.php';
$pengurus = new Pengurus();
$anakPanti = new Anak();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Diri Anak Panti</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>

<body>
    <?php include '../../layout/navbar.php' ?>
    <form action="/admin/anak/proses.php" method="post">

        <?php foreach ($anakPanti->edit($_GET['id']) as $data) { ?>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="hidden" name="aksi" value="update">

            <div class="d-flex justify-content-center">
            <div class="card col-md-10">

                <div class="card-body">

                    <div class="card-title text-center"><h3>Edit Anak Panti</h3></div>

                    <div class="mb-2 form-check">
                        <label for="nama" class="label-form">Nama Anak</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama'] ?>">
                    </div>

                    <div class="mb-2 form-check d-flex">

                        <label for="status" class="label-form-check me-3">
                            Status
                        </label>

                        <div class="form-check me-3">
                            <input type="checkbox" class="form-check-input" name="status[]" id="l" value="Yatim" <?php if ($data['status'] == "Yatim ") {
                                                                                                                        echo "checked";
                                                                                                                    } else if ($data['status'] == "Yatim Piatu ") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> >
                            <label for="l" class="form-check-label">Yatim</label>
                        </div>


                        <div class="form-check me-3">
                            <input type="checkbox" class="form-check-input" name="status[]" id="p" value="Piatu" <?php if ($data['status'] == "Piatu ") {
                                                                                                                        echo "checked";
                                                                                                                    } else if ($data['status'] == "Yatim Piatu ") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                            <label for="p" class="form-check-label">
                                Piatu
                            </label>

                        </div>

                    </div>

                    <div class="form-check mb-2">
                        <label for="nik" class="label-form-check">NIK</label>
                        <input type="number" name="nik" id="nik" class="input-form-check form-control" value="<?php echo $data['nik'] ?>">
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
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
                    </div>

                    <div class="form-check mb-2 d-flex">
                        Jenis Kelamin
                        <label for="l" class="form-check mx-3">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="l" value="Laki-laki" <?php echo $data['jenis_kelamin'] == "Laki-laki" ? 'checked' : ''; ?>>
                            Laki-laki
                        </label>
                        <label for="p" class="form-check">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="p" value="Perempuan" <?php echo $data['jenis_kelamin'] == "Perempuan" ? 'checked' : '' ?>>
                            Perempuan
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <label for="id_pengurus" class="label-form-check">Pengurus</label>
                        <select name="id_pengurus" class="form-select" id="id_pengurus">
                            <?php foreach ($pengurus->index() as $data) { ?>
                                <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                <?php } ?>
                <div class="form-check">
                    <button type="submit" name="save" class="btn btn-primary">Edit</button>
                </div>

                </div>

            </div>
            </div>

    </form>
</body>

</html>