<?php       

        class Anak extends Database 
        {

        public function create($nama, $status, $nik, $agama, $tanggalLahir, $tanggalMasuk,  $jenisKelamin, $idPengurus)
        {
             mysqli_query($this->koneksi, "INSERT INTO anak_panti
              VALUES (null, '$nama', '$status', '$nik', '$agama', '$tanggalLahir', $tanggalMasuk, '$jenisKelamin', '$idPengurus')");
        }
        

        public function index()
        {
            return mysqli_query($this->koneksi, "SELECT anak_panti.*, pengurus.nama as nama_pengurus FROM anak_panti JOIN pengurus ON  pengurus.id = anak_panti.id_pengurus");
        }

        public function show($id)
        {
            return mysqli_query($this->koneksi, "SELECT * FROM anak_panti WHERE id=$id");
        }
        
        
        public function edit($id)
        {
            return mysqli_query($this->koneksi, "SELECT * FROM anak_panti WHERE id=$id");
        }
        

        public function update($id, $nama, $status, $nik, $agama, $tanggalLahir, $jenisKelamin, $idPengurus)
        {
            return mysqli_query($this->koneksi, "UPDATE anak_panti SET nama='$nama', 
            status='$status', nik = $nik, agama = '$agama', tanggal_lahir = '$tanggalLahir',
              jenis_kelamin = '$jenisKelamin', id_pengurus='$idPengurus' WHERE id='$id'");
        }

        public function destroy($id)
        {
            return mysqli_query($this->koneksi, "DELETE FROM anak_panti WHERE id=$id");
        }
        
        
        
        
    }