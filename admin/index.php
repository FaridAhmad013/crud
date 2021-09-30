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

    </div>

    </div>
</body>
</html>