<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center><center>
        <nav>
        </nav>
    </center>
    <center><h3>Data Perpustakaan</h3></center>
    <fieldset>
        <a href="create.php">Tambah Data Buku Perpustakaan</a>  |
        <a href="../pengembalian/create.php">Pengembalian buku</a> |
         <a href="../perpus/index.php">Data perpustakaan</a> |
            <a href="create.php">Peminjaman Buku</a> <hr>
        <table border="1">
            <tr>
                <th>Id Peminjam</th>
                <th>Id Buku</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th colspan="3">Aksi</th>
            </tr></center>
            <?php
include '../database.php';
$peminjam = new Peminjam();
foreach ($peminjam->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $data['id_peminjam']; ?></td>
                    <td><?php echo $data['id_buku']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['no_telepon']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id_peminjam']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id_peminjam']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="peminjaman/proses.php" method="post">
                            <input type="hidden" name="id_peminjam" value="<?php echo $data['id_peminjam']; ?>">
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