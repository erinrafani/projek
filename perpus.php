<?php
class Perpus extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $dataperpus = mysqli_query($this->koneksi, "select * from perpus");
        // var_dump($datadosen);
        return $dataperpus;
    }

    // Menambah Data
    public function create($id_buku, $judul_buku, $penerbit)
    {
        mysqli_query(
            $this->koneksi,
            "insert into perpus values('$id_buku','$judul_buku','$penerbit')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_buku)
    {
        $dataperpus = mysqli_query(
            $this->koneksi,
            "select * from perpus where id_buku='$id_buku'"
        );
        return $dataperpus;
    }

    // Menampilkan data berdasarkan id
    public function edit($id_buku)
    {
        $dataperpus = mysqli_query(
            $this->koneksi,
            "select * from perpus where id_buku='$id_buku'"
        );
        return $dataperpus;
    }
    // mengupdate data berdasarkan id
    public function update($id_buku, $judul_buku, $penerbit)
    {
        mysqli_query(
            $this->koneksi,
            "update perpus set judul_buku='$judul_buku', penerbit='$penerbit' where id_buku='$id_buku'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id_buku)
    {
        mysqli_query($this->koneksi, "delete from perpus where id_buku='$id_buku'");
    }
}
