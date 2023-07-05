<?php 
session_start();
include "db.php";

$nama_mhs=$_POST['nama_mhs'];
$semester =$_POST['semester'];
$kelas =$_POST['kelas'];
$judul_buku=$_POST['judul_buku'];

$query= mysqli_query($connect, "INSERT INTO `mahasiswa`(`nama_mhs`, `semester`,`kelas`, `judul_buku`) VALUES ('$nama_mhs','$semester','$kelas','$judul_buku')");
if ($query){
	echo say ("Berhasil di Masukkan","index.php?act=peminjaman");
}



?>