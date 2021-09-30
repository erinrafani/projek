<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<center><h2>Peminjaman Buku</h2></center>
      <a href="create.php">Tambah Data Buku Perpustakaan</a>  |
        <a href="../pengembalian/create.php">Pengembalian buku</a> |
         <a href="../perpus/index.php">Data perpustakaan</a> |
    <FORM ACTION="proses.php" METHOD ="POST" NAME="input"><hr>
      <tr>
                    <th>Id Peminjaman :</th>
                    <td><input type="number" name="id_peminjam" required></td><br><hr>
                </tr>
                <tr>
                    <th>Id Buku :</th>
                    <td><input type="number" name="id_buku" required></td><br><hr>
                </tr>
                <tr>
                    <th>Nama :</th>
                    <td><input type="text" name="nama" required></td><br><hr>
                </tr>
                <tr>
                    <th>No Telepon :</th>
                    <td><input type="number" name="no_telepon" required></td><br><hr>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" value="simpan" >Simpan </button><br><br>
                    </th>
    </FORM>
</center>
</body>

</html>
