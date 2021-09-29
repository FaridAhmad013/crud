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

    include 'anak.php';
    include 'pengurus.php';
    // include 'anak.php';
    $database = new Database();