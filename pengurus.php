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
        
        
        
    }