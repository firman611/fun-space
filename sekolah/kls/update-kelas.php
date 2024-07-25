<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_kelas   = $_POST['id_kelas'];
$kode_kelas = $_POST['kode_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$wali_kelas       = $_POST['wali_kelas'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_kelas SET kode_kelas = '$kode_kelas', nama_kelas = '$nama_kelas', wali_kelas = '$wali_kelas' WHERE id_kelas = '$id_kelas'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: ../template/index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>