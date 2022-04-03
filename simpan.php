<?php 


// include koneksi database
include('koneksi.php');

// get data dari form
$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$jurusan_mhs = $_POST['jurusan_mhs'];

// query insert data ke dalam database
$query = "INSERT INTO tbl_mahasiswa (nim_mhs, nama_mhs, jurusan_mhs) values ('$nim_mhs','$nama_mhs','$jurusan_mhs')";

// kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    
    // redirect ke halaman index.php
    header("location: index.php");

}else {
    
    // pesan eror gagal insert data
    echo "data gagal disimpan!";

}

?>