<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>
<body>
    <?php
include '../database.php';
$peminjam = new Peminjam();
foreach ($peminjam->show($_GET['id']) as $data) {
    $id_peminjam = $data['id_peminjam'];
    $id_buku = $data['id_buku'];
    $nama = $data['nama'];
    $no_telepon = $data['no_telepon'];

}
?>
    <fieldset>
        <legend>Show Data perpus</legend>
        <table>

            <tr>
                <th>Id Buku</th>
                <td><input type="number" name="id_buku" value="<?php echo $id_buku; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>No telepon</th>
                <td><input type="number" name="no_telepon" value="<?php echo $no_telepon; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>