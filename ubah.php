<?php
require 'function.php';
//ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mh = query ("SELECT * FROM mahasiswa WHERE id = $id") [0];
//query data mahasiswa
if ( isset($_POST["submit"]) ) {
    //cek keberhasilan data
    if ( ubah($_POST) > 0) {
          echo " <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo " <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah data mahasiswa</title>
    </head>
<body>
<h1>Tambah Ubah Mahasiswa</h1>
<form action="" method="POST">
        <table>
            <input type="hidden" name="id" value="<?= $mh["id"]; ?>"></td>
            <tr>
            <td>Nama</td> <td>:</td> <td> <input type="text" name="nama" value="<?= $mh["nama"]; ?>"></td>
            </tr>
             <tr>
            <td>NIM</td> <td>:</td> <td> <input type="text" name="nim" value="<?= $mh["nim"]; ?>"></td>
            </tr>
             <tr>
            <td>Jurusan</td> <td>:</td> <td> <input type="text" name="jurusan" value="<?= $mh["jurusan"]; ?>"></td>
            </tr>
                <td><button type="submit" name="submit">Ubah Data</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>