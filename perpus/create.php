<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
   <center>
        <fieldset>
 <center><legend><h3><h2>Tambah Buku Perpustakaan</h2></h3></legend></center><hr>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th>Id Buku :</th>

                    <td><input type="number" name="id_buku" required></td>
                </tr>
                <tr>
                    <th>Judul :</th>
                    <td><input type="text" name="judul_buku" required></td>
                </tr>
                <tr>
                    <th>Penerbit :</th>
                    <td><input type="text" name="penerbit" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
   </center>
</body>
</html>
