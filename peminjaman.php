<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container" style="margin-top: 64px;">
		<h1 align="center">Administrasi Peminjaman</h1>
		<table align="center" cellspacing="0" width="70%" style="margin: auto; margin-top: 64px;">
			<form action="simpan-pinjam.php" method="post">
				<tr>
					<td>Nama mahasiswa</td>
					<td><input type="text" name="nama_mhs" class="input"></td>
				</tr>
				<tr>
					<td>Semester</td>
					<td><input type="number" name="semester" class="input"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" class="input"></td>
				</tr>
				<tr>
					<td>Judul Buku</td>
					<td><input type="text" name="judul_buku" class="input"></td>
				</tr>
				<tr>
					<td colspan="2" style="padding-bottom: 16px;">
						<input type="reset" class="submit" value="reset">
						<input type="submit" class="submit right" value="tambah">
					</td>
				</tr>
			</form>
		</table>
		<div id="table">
		<table align="center" cellspacing="0" width="100%" style="margin-top: 32px;">
			<tr>
				<th>Nama Mahasiswa</th>
				<th>Semester</th>
				<th>Kelas</th>
				<th>Judul Buku</th>
				<th>Tanggal Pinjam</th>
				<th>Action</th>
			</tr>
			<?php
				$q=mysqli_query($connect, "select * from mahasiswa");
				while ($a = mysqli_fetch_array($q)){
			?>
			<tr>
				<td style="text-align: center;"><?= $a['nama_mhs']?></td>
				<td style="text-align: center;"><?= $a['semester']?></td>
				<td style="text-align: center;"><?= $a['kelas']?></td>
				<td style="text-align: center;"><?= $a['judul_buku']?></td>
				<td style="text-align: center;"><?= $a['tgl_pinjam']?></td>
				<td style="text-align: center;"><a href="?editpinjam=<?=$a['nim']?>">Edit</a></td>
			</tr>
			<?php
			}
			?>
		</table>
		</div>
	</div>

</body>
</html>
<?php
	if(isset($_GET['con'])){
		$nim= $_GET['con'];
		$q=mysqli_query($connect, "update mahasiswa set tgl_kembali='NOW()' where nim='$nim' ");
		if($q)
		echo say("Berhasil di Ubah", "index.php?act-peminjaman");
	}
	?>