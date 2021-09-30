<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$perpus = new Perpus();
foreach ($perpus->edit($_GET['id']) as $data) {
    $id_buku = $data['id_buku'];
    $judul_buku = $data['judul_buku'];
    $penerbit = $data['penerbit'];
}
?>
    <center><fieldset>
        <h3><b>Edit Data perpus</b></h3><hr>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
            <input type="hidden" name="judul_buku" value="<?php echo $judul_buku; ?>">
            <input type="hidden" name="penerbit" value="<?php echo $penerbit; ?>">

            <table>
                <tr>
                    <th>Id Buku :</th>
                    <td><input type="number" name="id_buku" value="<?php echo $id_buku; ?>" required></td>
                </tr>
                <tr>
                    <th>Judul Buku :</th>
                    <td><input type="text" name="judul_buku" value="<?php echo $judul_buku; ?>" required></td>
                </tr>
                 <tr>
                    <th>Penerbit :</th>
                    <td><input type="text" name="penerbit" value="<?php echo $penerbit; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset></center>
</body>

</html>