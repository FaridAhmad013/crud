<?php       

    include '../database.php';
    $pengurus = new Pengurus();

    if(isset($_POST['save'])){
        $aksi = $_POST['aksi'];
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenisKelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $tanggalLahir = $_POST['tanggal_lahir'];
        $noTelp = $_POST['no_telp'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        if($aksi == "create"){
            $pengurus->create($nama, $jenisKelamin, $agama, $tanggalLahir, $noTelp, $email, $alamat);
            header('location:create.php');
        }else if($aksi == "update"){
            $pengurus->update($nama, $jenisKelamin, $agama, $tanggalLahir, $noTelp, $email, $alamat, $id);
            header('location:index.php');
        }else if($aksi == "delete"){
            $pengurus->destroy($id);
            header('location:index.php');
        }

    }