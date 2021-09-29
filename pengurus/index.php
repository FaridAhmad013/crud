<?php
include '../database.php';
$pengurus = new Pengurus();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengurus</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>

<body>
<?php include '../layout/navbar.php';?>
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-10">


            <div class="card">
                <div class="card-header bg-primary text-white">Pengurus</div>

                <div class="card-body p-5">
                    
                    <table class="table table-primary text-center table-striped" >
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Tanggal Lahir</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        <?php foreach ($pengurus->index() as $data) {?>

                            <tr>
                                <td><?php echo $index += 1; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['jenis_kelamin'] ?></td>
                                <td><?php echo $data['agama'] ?></td>
                                <td><?php echo $data['tanggal_lahir'] ?></td>
                                <td><?php echo $data['no_telp'] ?></td>
                                <td><?php echo $data['email'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td><a class="btn btn-info text-white" href="/pengurus/show.php?id=<?php echo $data['id'] ?>">Show</a></td>
                                <td><a class="btn btn-success" href="/pengurus/edit.php?id=<?php echo $data['id'] ?>">Edit</a></td>
                                <td>
                                    <form action="/pengurus/proses.php" method="post">
                                        <input type="hidden" name="aksi" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

                                        <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        <?php } ?>

                    </table>

                </div>

            </div>


        </div>
    </div>

</body>

</html>