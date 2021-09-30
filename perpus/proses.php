<?php
include '../database.php';
$perpus = new Perpus();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penerbit = $_POST['penerbit'];

    if ($aksi == "create") {
        $perpus->create($id_buku, $judul_buku, $penerbit);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $perpus->update($id_buku, $judul_buku, $penerbit);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $perpus->delete($id_buku);
        header("location:index.php");
    }

}
