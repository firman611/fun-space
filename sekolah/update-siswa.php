<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];
$kode_kelas      = $_POST['kode_kelas'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat', kode_kelas = '$kode_kelas' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php?page=data-siswa");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>