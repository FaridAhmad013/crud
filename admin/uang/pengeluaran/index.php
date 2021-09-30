<?php 
    include '../../../database.php';

    $pengeluaran = new Pengeluaran();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengeluaran</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
</head>
<body>
    <?php include '../../../layout/navbar.php' ?>

   
          
          <div class="d-flex justify-content-center">

          <div class="col-md-8">

          <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                    <div>Pemasukan</div>
                        <a href="/admin/uang/pengeluaran/create.php" class="btn btn-primary">Create</a>
                    </div>

                    <table class="table text-center">
                        <thead class="bg-danger text-light">
                            <th>No</th>
                            <th>Nama Pengeluaran</th>
                            <th>Total</th>
                            <th>Tanggal</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>

                        <?php foreach($pengeluaran->index() as $data){?>
                            <input type="hidden" name="id_pengeluaran" value="<?php echo $data['id_pengeluaran']?>">
                        <tbody>
                            <td><?php echo $index+=1 ?></td>
                            <td><?php echo $data['nama_pengeluaran']?></td>
                            <td><?php echo $data['total'] ?></td>
                            <td><?php echo $data['tanggal'] ?></td>
                            <td><a href="/admin/uang/pengeluaran/edit.php?id_pengeluaran=<?php echo $data['id_pengeluaran']?>" class="btn btn-success">Edit</a></td>
                            <td>
                                <form action="/admin/uang/pengeluaran/proses.php" method="post">
                                <input type="hidden" name="id_pengeluaran" value="<?php echo $data['id_pengeluaran']?>">
                                <input type="hidden" name="aksi" value="destroy">

                                <button type="submit" name="save" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Delete</button>
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