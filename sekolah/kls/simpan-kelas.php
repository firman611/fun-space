<?php

//include koneksi database
include('../koneksi.php');

//get data dari form

$kode_kelas           = $_POST['kode_kelas'];
$nama_kelas           = $_POST['nama_kelas'];
$wali                 = $_POST['wali_kelas'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_kelas (kode_kelas, nama_kelas, wali_kelas) VALUES ('$kode_kelas', '$nama_kelas', '$wali')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../template/index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>