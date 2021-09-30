<?php
class Pengembalian extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $kembali = mysqli_query($this->koneksi, "select * from pengembalian");
        // var_dump($datadosen);
        return $kembali;
    }

    // Menambah Data
    public function create($id_peminjam, $tgl_pinjam, $tgl_kembali, $denda)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pengembalian values('$id_peminjam, $tgl_pinjam, $tgl_kembali, $denda')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_peminjam)
    {
        $kembali = mysqli_query(
            $this->koneksi,
            "select * from pengembalian where id_buku='$id_peminjam'"
        );
        return $kembali;
    }

    // Menampilkan data berdasarkan id
    public function edit($id_peminjam)
    {
        $kembali = mysqli_query(
            $this->koneksi,
            "select * from pengembalian where id_peminjam='$id_peminjam'"
        );
        return $kembali;
    }
    // mengupdate data berdasarkan id
    public function update($id_peminjam, $tgl_pinjam, $tgl_kembali, $denda)
    {
        mysqli_query(
            $this->koneksi,
            "update pengembalian set judul_buku='$judul_buku', penerbit='$penerbit' where id_buku='$id_buku'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id_buku)
    {
        mysqli_query($this->koneksi, "delete from pengembalian where id_buku='$id_buku'");
    }
}
