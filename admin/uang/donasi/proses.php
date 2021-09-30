<?php 
    include '../../../database.php';
    $pemasukan = new Pemasukan();


if(isset($_POST['save'])){
    $idDonasi = $_POST['id_donasi'];
    $idUang = $_POST['id_uang'];
    $aksi = $_POST['aksi'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    
   if($aksi == "create"){
      $pemasukan->create($idUang, $nama, $tanggal, $jumlah);
      header('location:index.php');
   }else if($aksi == "update"){
        $pemasukan->update($idUang, $nama, $tanggal, $jumlah, $idDonasi);
      header('location:index.php');
   }else if($aksi == "destroy"){
        $pemasukan->destroy($idDonasi);
        echo "$idDonasi";
        header('location:index.php');
   }
    
}