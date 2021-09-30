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

<center><legend><h2>Peminjaman</h2></legend><hr>
   <center>
       <?php
if (isset($_POST['save'])) {
    $id_peminjam = $_POST['id_peminjam'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    echo "Id Peminjam : <b>$id_peminjam</b><br>";
    echo "Tanggal Pinjam : <b>$tgl_pinjam</b><br>";
    echo "Tanggal Kembali : <b>$tgl_kembali</b>";

}
?>
</center><hr>
<th>
    <button type="submit" name="save" value="simpan" >Kembali</button><br><br>
</th>
</form>
</body>
</html>
