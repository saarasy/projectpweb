<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$qcek = mysqli_query($connect, "select * from user where username= '$username' and password='$password' and status='ON'");
if(mysqli_num_rows($qcek)==1){
	$query=mysqli_query($connect, "select * from user where username= '$username' and password='$password' and status='ON'");
	$q=mysqli_fetch_array($query);
	$sql="insert into user(nama) VALUES (\"$nama\")";
	$nama= $sql;
 
	if($nama){
		$_SESSION['nama'] = $nama;
		echo say ("Selamat Datang", "index.php");
} 
} else 
echo say ("username atau password anda salah, silakan ulangi lagi","login.php");
mysqli_close ($connect);
?>