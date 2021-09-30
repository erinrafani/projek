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
    <center><h2>Pengembalian Buku</h2></center>
    <FORM ACTION="" METHOD ="POST" NAME="input"><hr>
      <tr>
                    <th>Id Peminjaman :</th>
                    <td><input type="number" name="id_peminjam" required></td><br><hr>
                </tr>
                <tr>
                    <th>Tanggal Pinjam :</th>
                    <td><input type="date" name="tgl_pinjam" required></td><br><hr>
                </tr>
                <tr>
                    <th>Tanggal Kembali :</th>
                    <td><input type="date" name="tgl_kembali" required></td><br><hr>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" value="simpan" >Simpan </button><br><br>
                    </th>
    </FORM>
</center>
</body>
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

</center>
</html>




