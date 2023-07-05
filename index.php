<?php
session_start();
include "db.php";
if (!isset($_SESSION['nama'])){
	echo "
	<script>window.location='login.php';</script>
	";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="kiri">
			<ul><strong>
				<a href="index.php?act=home"><li>Home</li></a>
				<a href="index.php?act=buku"><li>Koleksi Buku</li></a>
				<a href="index.php?act=peminjaman"><li>Peminjaman</li></a>
				</strong>
			</ul>
		</div>
		<div class="kanan">
			<div class="hal">
				<?php
				if(isset($_GET['act'])){
					if($_GET['act']=='home')
						include 'home.php';
					else
						if($_GET['act']=='buku')
							include 'buku.php';
					else
						if($_GET['act']=='peminjaman')
							include 'peminjaman.php';
				} else if (isset($_GET['editpinjam'])){
					include "editpinjam.php";

				} else include "depan.php";
				

				?>

				
			</div>
		</div>
	</div>
	<div id="footer">
			<div id="text">
				<h5 style="color: white; text-align: center;"><br><br><br><br><br> PRODUCTS &nbsp; |&nbsp; BLOG &nbsp; |&nbsp; LIBRARY &nbsp; |&nbsp; CONTACT </h5>
				<h5 style="text-align: center; color: white;">Coppyright @ 2023</h5>

			</div>

</body>
</html>