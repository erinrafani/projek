<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center><b>Data Perpustakaan</b></center>
    <center>
        <nav>
            <a href="index.php">Data perpustakaan</a> |
            <a href="create.php">Peminjaman Buku</a>
        </nav>
    </center>

    <fieldset>
        <legend>Data Buku Perpustakaan</legend>
        <a href="create.php">Tambah Data Buku Perpustakaan</a>  |
        <a href="#">Pengembalian buku</a>
        <table border="1">
            <tr>
                <th>Id Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$pengembalian = new Pengembalian();
foreach ($pengembalian->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $data['id_peminjam']; ?></td>
                    <td><?php echo $data['tgl_pinjam']; ?></td>
                    <td><?php echo $data['tgl_kembali']; ?></td>
                    <td><?php echo $data['denda']; ?></td>
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