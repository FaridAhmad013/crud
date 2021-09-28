<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurus</title>
</head>
<body>
    <form action="/pengurus/proses.php" method="post">
        <input type="hidden" name="aksi" value="create">

        <div>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama">
        </div>

        <div>
           jenis Kelamin

           <label for="l">
               <input type="radio" name="jenis_kelamin" value="Laki-laki" id="l">
               Laki-laki
           </label>

           <label for="p">
               <input type="radio" name="jenis_kelamin" value="Perempuan" id="p">
               Perempuan
           </label>

        </div>

        <div>
            <label for="agama">Agama</label>
            <select name="agama" id="agama">
                <option value="">PIlih</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>
        </div>

        <div>
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir">
        </div>

        <div>
            <label for="no_telp">No Telepon</label>
            <input type="number" name="no_telp" id="no_telp">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        </div>


        <button type="submit" name="save">Create</button>
    </form>
</body>
</html>