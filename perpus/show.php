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
$perpus = new Perpus();
foreach ($perpus->show($_GET['id']) as $data) {
    $id_buku = $data['id_buku'];
    $judul_buku = $data['judul_buku'];
    $penerbit = $data['penerbit'];
}
?>
    <fieldset>
        <legend>Show Data perpus</legend>
        <table>

            <tr>
                <th>Judul Buku</th>
                <td><input type="text" name="judul_buku" value="<?php echo $judul_buku; ?>" readonly></td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td><input type="text" name="penerbit" value="<?php echo $penerbit; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>