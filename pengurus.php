<?php   

    class Pengurus extends Database 
    {
        
        public function create($nama, $jenisKelamin, $agama, $tanggalLahir, $noTelp, $email, $alamat)
        {
            mysqli_query($this->koneksi, "INSERT INTO pengurus 
            VALUES (null, '$nama', '$jenisKelamin', '$agama', '$tanggalLahir', '$noTelp', '$email', '$alamat') ");
        }

        public function index()
        {
            return mysqli_query($this->koneksi, "SELECT * FROM pengurus");
        }
        
        public function show($id)
        {
            return mysqli_query($this->koneksi, "SELECT * FROM pengurus WHERE id=$id");
        }

        public function edit($id)
        {
            return mysqli_query($this->koneksi, "SELECT * FROM pengurus WHERE id=$id");
        }
        
        public function update($nama, $jenisKelamin, $agama, $tanggalLahir, $noTelp, $email, $alamat, $id)
        {
            return mysqli_query($this->koneksi, "UPDATE pengurus SET nama = '$nama', jenis_kelamin = '$jenisKelamin',
            agama = '$agama', tanggal_lahir = '$tanggalLahir', no_telp = '$noTelp', email = '$email', alamat = '$alamat' WHERE id='$id'");
        }

        public function destroy($id)
        {
            return mysqli_query($this->koneksi, "DELETE FROM pengurus WHERE id=$id");
        }
        
        
        
    }