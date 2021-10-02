<?php 
    include '../_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengurus Panti</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>
<body>
    <?php include '../../layout/navbar.php';?>

    <form action="/admin/pengurus/proses.php" method="post">
        <input type="hidden" name="aksi" value="create">

        <div class="d-flex justify-content-center">

        <div class="card col-md-8">
            <div class="card-body">
                <div class="card-title text-center"><h3>Tambahkan data pengurus</h3></div>
                
            <div class="form-check mb-2">
            <label for="nama" class="label-form-check">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="input-form-check form-control">
            </div>

           <div class="form-check d-flex mb-2">
           jenis Kelamin
           <label for="l" class="label-form-check  mx-5">
               <input type="radio" name="jenis_kelamin" class="form-check-input" value="Laki-laki" id="l">
               Laki-laki
           </label>

           <label for="p" class="label-form-check">
               <input type="radio" name="jenis_kelamin" class="form-check-input" value="Perempuan" id="p">
               Perempuan
           </label>

        </div>

        <div class="form-check mb-2">
            <label for="agama" class="label-form-check">Agama</label>
            <select name="agama" id="agama" class="form-control form-select">
                <option value="">PIlih</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>
        </div>

        <div class="form-check mb-2">
            <label for="tanggal_lahir" class="label-form-check">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-date">
        </div>

        <div class="form-check mb-2">
            <label for="no_telp" class="label-form-check">No Telepon</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control ">
        </div>

        <div class="form-check mb-2">
            <label for="email" class="label-form-check">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-check mb-2">
            <label for="alamat" class="label-form-check">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"></textarea>
        </div>

        <div class="form-check">
        <button type="submit" name="save" class="btn btn-primary">Create</button>
        </div>
        


            </div>
        </div>

      
        </div>
    </form>

    <script src="/asset/js/bootstrap.min.js"></script>

</body>
</html>