<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../login.php">

<center><legend><h2>Peminjaman</h2></legend>
<center> |<a href="create.php">Tambah Data Buku Perpustakaan</a>  |
        <a href="../pengembalian/create.php">Pengembalian buku</a> |
         <a href="../perpus/index.php">Data perpustakaan</a> |</center><hr>
   <center> <?php
if (isset($_POST['save'])) {
    $id_peminjam = $_POST['id_peminjam'];
    $id_buku = $_POST['id_buku'];
    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];

    echo "Id Peminjam : <b>$id_peminjam</b><br>";
    echo "Id Buku : <b>$id_buku</b><br>";
    echo "Nama : <b>$nama</b><br>";
    echo "No Telepon : <b>$no_telepon</b>";

}
?>
</center><hr>
<th>
    <button type="submit" name="save" value="simpan" >Kembali</button><br><br>
</th>
</form>
</body>
</html>
