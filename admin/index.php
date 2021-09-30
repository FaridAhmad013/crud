<?php 
    session_start();

    if(!$_SESSION['login']){
        echo "<script type='text/javascript'>
        alert('Maaf anda harus login terlebih dahulu!');
            window.location = '/index.php'
        </script>";
    }else{
        include '../database.php';
        $user = new Database();
        $pemasukan = new Pemasukan();
        $pengeluaran = new Pengeluaran();
        $user = mysqli_query($user->koneksi, "SELECT * FROM users WHERE password='$_SESSION[login]'");
    }

    $user = mysqli_fetch_array($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>
<body>
    <?php include '../layout/navbar.php'?>

    <div class="d-flex justify-content-center">

    <div class="col-md-8">

    <div class="alert alert-info" role="alert">
        Selamat datang <?php echo $user['nama']?>
    </div>

    <h3>Uang</h3>
    <div class="row">

            <div class="col-md-4">
                <?php 
                $uang = new Uang(); 
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Total Uang</div>

                        <?php  ?>
                        <div class="fw-bold">
                            Rp. <?php  
                            foreach($pemasukan->totalPemasukan() as $totalS){
                                $saldo =  $totalS['total_pemasukan'];
                                foreach($pengeluaran->totalPengeluaran() as $totalP){
                                    $saldoku = $saldo-$totalP['total_pengeluaran'];
                                }
                            }

                            echo number_format($saldoku, 2, ',', ',');
                            
                            ?>
                        </div>

                    
                    </div>
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <div>Pengeluaran</div>
                            <a href="/admin/uang/pengeluaran/index.php" class="btn btn-danger"><i class="bi bi-journal-plus">-</i></a>
                        </div>

                        <div class="fw-bold">
                            Rp. <?php 
                                foreach($pengeluaran->totalPengeluaran() as $total){
                                    echo number_format($total['total_pengeluaran'],2, ',', ',');
                                }
                            ?>
                        </div>
                    
                    </div>
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between align-items-center">
                        <div>Pemasukan</div>
                            <a href="/admin/uang/donasi/index.php" class="btn btn-primary"><i class="bi bi-journal-plus">+</i></a>
                        </div>

                        <div class="fw-bold">
                            Rp. <?php 
                                foreach($pemasukan->totalPemasukan() as $total){
                                    echo number_format($total['total_pemasukan'],2, ',', ',');
                                }
                            ?>
                        </div>
                    
                    </div>
                </div>
                
            </div>


    </div>

    </div>

    </div>


</body>
</html>