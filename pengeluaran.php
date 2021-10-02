<?php   

    class Pengeluaran extends Database 
    {
        
        public function index()
        {
            return mysqli_query($this->koneksi, "SELECT * FROM pengeluaran");
        }

        public function create($idUang, $namaPengeluaran, $total, $tanggal)
        {
            return mysqli_query($this->koneksi, "INSERT INTO pengeluaran VALUES (null, '$idUang', '$namaPengeluaran', '$total', '$tanggal')");
        }

        public function edit($idPengeluaran)
        {
            return mysqli_query($this->koneksi, "SELECT * FROM pengeluaran WHERE id_pengeluaran = $idPengeluaran");
        }

        public function update($idUang, $namaPengeluaran, $total, $tanggal, $idPengeluaran )
        {
            return mysqli_query($this->koneksi, "UPDATE pengeluaran SET id_uang = '$idUang', nama_pengeluaran = '$namaPengeluaran', total = '$total', tanggal = '$tanggal' WHERE id_pengeluaran = $idPengeluaran");
        }

        public function destroy($idPengeluaran)
        {
            return mysqli_query($this->koneksi, "DELETE FROM pengeluaran WHERE id_pengeluaran = $idPengeluaran");
        }

        public function totalPengeluaran()
        {
            return mysqli_query($this->koneksi, "SELECT SUM(total) AS total_pengeluaran FROM pengeluaran");
        }
        
        
        
        
        
        

    }