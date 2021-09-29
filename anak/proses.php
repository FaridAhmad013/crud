<?php
include '../database.php';
$anak = new Anak();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $nik = $_POST['status'];
    $agama = $_POST['agama'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $tahunMasuk = 2021;
    $jenisKelamin = $_POST['jenis_kelamin'];
    $idPengurus = $_POST['id_pengurus'];

    if($aksi == "create"){
        $anak->create($nama, $status, $nik, $agama, $tanggalLahir, $tahunMasuk, $jenisKelamin, $idPengurus);
        header('location:index.php');
    }
}
