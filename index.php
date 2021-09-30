<?php   

    session_start();

    include 'database.php';
    $database = new Database();
    
    if($_SESSION['login']){
        header('location:admin/index.php');
    }
    
    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result = mysqli_query(
            $database->koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'"
        );
        $row = mysqli_num_rows($result);

        if($row > 0){
            $_SESSION['login'] = $password;
            echo "<script type='text/javascript'>
                alert('Login Berhasil')
                    window.location = 'admin/index.php'
                </script>";
        }else{
            echo "<script type='text/javascript'>
                alert('Username Atau Pasword anda salah')
                window.location = 'login.php'
            </script>";
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

        <div class="col-md-6">

        <div class="card">
            <div class="card-body">
                <div class="card-title text-center"><h3>Login</h3></div>

                <form action="" method="post">
                    <div class="form-check mb-2">
                        <label for="username" class="label-form-check">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-check mb-2">
                    <label for="password" class="label-form-check">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="mb-2 form-check">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>

                </form>

            </div>
        </div>

        </div>

        </div>
    </body>
    </html>