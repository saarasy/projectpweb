<?php 
session_start();
include "db.php";

$nim= $_POST['nim'];
$nama_mhs=$_POST['nama_mhs'];
$semester =$_POST['semester'];
$kelas =$_POST['kelas'];
$judul_buku=$_POST['judul_buku'];

$query= mysqli_query($connect, "UPDATE `mahasiswa` SET `nim` = '$nim',`nama_mhs` = '$nama_mhs', `semester` = '$semester',`kelas` = '$kelas', `judul_buku` = '$judul_buku' WHERE `mahasiswa`.`nim` = $nim");
if ($query){
	echo say ("Berhasil di masukkan","index.php?act=peminjaman");
}



?>