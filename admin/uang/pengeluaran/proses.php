<?php 

    include '../../../database.php';
    $pengeluaran = new Pengeluaran();

    if(isset($_POST['save'])){
        $idPengeluaran = $_POST['id_pengeluaran'];
        $idUang = $_POST['id_uang'];
        $namaPengeluaran = $_POST['nama_pengeluaran'];
        $total = $_POST['total'];
        $aksi = $_POST['aksi'];
        $tanggal = $_POST['tanggal'];

        if($aksi == "create"){
        // echo "$idUang, $namaPengeluaran $total $tanggal $idPengeluaran";
           $pengeluaran->create($idUang, $namaPengeluaran, $total, $tanggal);
           header('location:index.php');
        }else if($aksi == 'update'){
            // echo "$idUang, $namaPengeluaran $total $tanggal $idPengeluaran";
           $pengeluaran->update($idUang, $namaPengeluaran, $total, $tanggal, $idPengeluaran);
           header('location:index.php');
        }else if($aksi == "destroy"){
            $pengeluaran->destroy($idPengeluaran);
            header('location:index.php');
        }
    }