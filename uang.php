<?php   

    class Uang extends Database 
    {
        public function index()
        {
            return mysqli_query($this->koneksi, "SELECT * FROM uang");
        }

        public function totalSaldo($totalSaldo)
        {
            return mysqli_query($this->koneksi, "UPDATE uang SET saldo = $totalSaldo");
        }
        
        

        
        
    }
