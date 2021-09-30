<?php   

    class Uang extends Database 
    {
        public function index()
        {
            return mysqli_query($this->koneksi, "SELECT * FROM uang");
        }
        
    }