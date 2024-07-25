<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nisn           = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];
$kode_kelas       = $_POST['kode_kelas'];
$kelas       = $_POST['kelas'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat, kode_kelas, kelas) VALUES ('$nisn', '$nama_lengkap', '$alamat', '$kode_kelas','$kelas')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../template/index.php?page=data-siswa");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>