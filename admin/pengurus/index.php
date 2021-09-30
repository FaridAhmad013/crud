<?php
include '../../database.php';
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
<?php include '../../layout/navbar.php';?>
    <div class="d-flex justify-content-center align-items-center">
       
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">

            <div class="d-flex justify-content-center">
            <div class="col-md-10">

                <div class="card-title d-flex justify-content-between my-5">
                    <h3 class="d-flex">Daftar Pengurus Panti Asuhan</h3>
                    <a href="/admin/pengurus/create.php" class="d-flex btn btn-primary">Tambah</a>
                </div>

                <table class="table text-center">
                    <thead class=" bg-primary text-light">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php foreach($pengurus->index() as $data){?>
                        <tr>
                            <td><?php echo $index+=1?></td>
                            <td><?php echo $data['nama']?></td>
                            <td><?php echo $data['jenis_kelamin']?></td>
                            <td><?php echo $data['agama']?></td>
                            <td><a href="/admin/pengurus/show.php?id=<?php echo $data['id']?>" class="btn btn-info text-light">Show</a></td>
                            <td><a href="/admin/pengurus/edit.php?id=<?php echo $data['id']?>" class="btn btn-success">Edit</a></td>
                            <td><form action="/admin/pengurus/proses.php" method="post">
                            <input type="hidden" name="aksi" value="destroy">
                                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                                <button type="submit" name="save" class="btn btn-danger" onclick="return confirm('Apakah anda yakin mau menghapus')">Delete</button>
                            </form>
                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>

            </div>
</div>

            </div>
        </div>

        
        </div>
    </div>

</body>

</html>