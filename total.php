<?php   

    class Total extends Database 
    {
    
        
        public function totalSaldo($totalSaldo)
        {
            return mysqli_query($this->koneksi, "UPDATE uang SET saldo = $totalSaldo");
        }
        

    }