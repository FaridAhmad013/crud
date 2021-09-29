<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anak Panti</title>
</head>
<body>
    <?php
    include '../database.php';
    $anakPanti = new Anak();
    foreach($anakPanti->index() as $data)
    {
        echo $data['nama'];
    }?>
</body>
</html>