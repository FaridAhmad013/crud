<?php   

    class Database {
        public $hostname = "localhost", 
               $username = "root",
               $password = "123",
               $database = "pondok_yatim";
        
        public $koneksi;

        public function __construct()
        {
            $this->koneksi = mysqli_connect(
                $this->hostname, $this->username, $this->password, $this->database
            );

            if(!$this->koneksi){
                echo "gagal";
            }
        }
        

    }

    include 'pengurus.php';
    $database = new Database();