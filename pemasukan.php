<?php 

    class Pemasukan extends Database
    {
        public function index()
        {
            return mysqli_query($this->koneksi, "SELECT * FROM donasi");
        }

        public function create($idUang, $nama, $tanggal, $jumlah)
        {
            return mysqli_query($this->koneksi, "INSERT INTO donasi VALUES (NULL, '$idUang', '$nama', '$tanggal', '$jumlah' )");
        }

        public function edit($idDonasi)
        {
            return mysqli_query($this->koneksi, "SELECT * FROM donasi WHERE id_donasi = $idDonasi ");
        }

        public function update($idUang, $nama, $tanggal, $jumlah, $idDonasi)
        {
            return mysqli_query($this->koneksi, "UPDATE donasi SET id_uang='$idUang',nama='$nama',tanggal='$tanggal',jumlah='$jumlah' WHERE id_donasi = $idDonasi");
        }

        public function destroy($idDonasi)
        {
            return mysqli_query($this->koneksi, "DELETE FROM donasi WHERE id_donasi = $idDonasi");
        }

        public function totalPemasukan()
        {
            return mysqli_query($this->koneksi, "SELECT SUM(jumlah) AS total_pemasukan FROM donasi");
        }
        
        

        
        
        
        
    }