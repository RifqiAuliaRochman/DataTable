<?php

include('koneksi.php');

//get data dari form
$id_mhs = $_POST['id_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$jurusan_mhs = $_POST['jurusan_mhs'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_mahasiswa SET nim_mhs = '$nim_mhs', nama_mhs = '$nama_mhs', jurusan_mhs = '$jurusan_mhs' WHERE id_mhs = '$id_mhs'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak 
if ($connection->query($query)){
    //redirect ke halaman index.php
    header("location: index.php");
} else{
    //pesan error gagal update
    echo "Data Gagal Dirubah!";
}
?>