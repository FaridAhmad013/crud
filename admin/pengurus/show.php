<?php
include '../_session.php';
include '../../database.php';
$pengurus = new Pengurus();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Pengurus</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>

<body>
<?php include '../../layout/navbar.php';?>

<?php foreach($pengurus->show($_GET['id']) as $data) {?>
  <div class="d-flex justify-content-center align-items-center my-5">
<div class="card mb-3 col-md-8 shadow-sm">

  <div class="row g-0">

    <div class="col-md-4">
      <img src="/asset/img/unknown.jpg" class="img-fluid rounded-start" alt="...">
    </div>

    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $data['nama']?></h5>
        
        <div class="mb-2 row">
            <div class="col-md-6">Tanggal Lahir</div>
            <div class="col-md-6">
                <p class="fw-bold"><?php echo $data['tanggal_lahir']?></p>
            </div>
        </div>

        <div class="mb-2 row">
            <div class="col-md-6">Jenis KeLamin</div>
            <div class="col-md-6">
                <p class="fw-bold"><?php echo $data['jenis_kelamin']?></p>
            </div>
        </div>

        <div class="mb-2 row">
            <div class="col-md-6">Agama</div>
            <div class="col-md-6">
                <p class="fw-bold"><?php echo $data['agama']?></</p>
            </div>
        </div>

        <div class="mb-2 row">
            <div class="col-md-6">Alamat</div>
            <div class="col-md-6">
            <p class="fw-bold"><?php echo $data['alamat']?></p>    
            </div>
        </div>

        <div class="mb-2 row">
            <div class="col-md-6">No Telepon</div>
            <div class="col-md-6">
            <p class="fw-bold"><?php echo $data['no_telp']?></p>    
            </div>
        </div>

        <div class="mb-2 row">
            <div class="col-md-6">Email</div>
            <div class="col-md-6">
            <p class="fw-bold">
            <?php echo $data['email']?>
            </p>
            </div>
        </div>


      </div>
    </div>
    
  </div>

</div>

</div>
<?php }?>

<script src="/asset/js/bootstrap.min.js"></script>

</body>

</html>