<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbmahasiswa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = array();
    if($result){
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows; 
 }
}

function tambah ($data) {
    global $conn;
  $nama = $data["nama"];
$nim = $data["nim"];
$jurusan = $data["jurusan"];
$query = "INSERT INTO mahasiswa VALUES ('','$nama','$nim','$jurusan')";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}



function hapus ($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $nim = $data["nim"];
    $jurusan = $data["jurusan"];
    $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jurusan = '$jurusan' WHERE id =$id";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


function cari ($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword' ";
    return query ($query);
}
