<?php
require 'function.php';
if( isset($_POST["submit"])) {
    // cek keberhasilan data

    if (tambah($_POST) > 0 ) {
        
        echo " <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    } else {
        
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
        
  
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah data mahasiswa</title>
</head>
<body>
<h1>Tambah Data Mahaasiswa</h1>
<form action="" method="post">
        <table>
            <tr> 
                <td>Nama</td> 
                <td> : </td> 
                <td><input type="text" name="nama"></td>
            <tr>
                <td>Nim</td> 
                <td> : </td> 
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Jurusan</td> 
                <td> : </td> 
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
            <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>

