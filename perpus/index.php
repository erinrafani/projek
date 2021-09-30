<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


        <center>
        <nav>

        </nav>
    </center>
    <center><h3>Data Perpustakaan</h3></center>
    <fieldset>

        <center>
        <a href="create.php">Tambah Data Buku Perpustakaan</a> |
        <a href="index.php">Data perpustakaan</a> |
        <a href="../peminjaman/create.php">Peminjaman Buku</a> <hr>
        <table border="1">
            <tr>
                <th>id buku</th>
                <th>judul buku</th>
                <th>penerbit</th>
                <th colspan="3">Aksi</th>
            </tr></center>
            <?php
include '../database.php';
$perpus = new Perpus();
// var_dump($dosen->index());
foreach ($perpus->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $data['id_buku']; ?></td>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $data['id_buku']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>