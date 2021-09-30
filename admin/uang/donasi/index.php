<?php 
    include '../../../database.php';
    $pemasukan = new Pemasukan();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>

<body>
    <?php include '../../../layout/navbar.php' ?>

    <div class="d-flex justify-content-center">

        <div class="col-md-10">

            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <div>Pemasukan</div>
                        <a href="/admin/uang/donasi/create.php" class="btn btn-primary">Create</a>
                    </div>

                    <table class="table text-center">
                        <thead class="bg-primary text-light">
                            <th>No</th>
                            <th>Nama Pemasukan</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <?php foreach($pemasukan->index() as $data){?>
                        <tbody>
                            <td><?php echo $index+=1 ?></td>
                            <td><?php echo $data['nama']?></td>
                            <td><?php echo $data['tanggal']?></td>
                            <td><?php echo $data['jumlah']?></td>
                            <td><a href="/admin/uang/donasi/edit.php?id_donasi=<?php echo $data['id_donasi']?>" class="btn btn-success">Edit</a></td>
                            <td>
                                <form action="/admin/uang/donasi/proses.php" method="post">
                                <input type="hidden" name="aksi" value="destroy">
                                <input type="hidden" name="id_donasi" value="<?php echo $data['id_donasi']?>">
                                <button type="submit" name="save" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                </form>
                            </td>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>

        </div>

    </div>
</body>

</html>