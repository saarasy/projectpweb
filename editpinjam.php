

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="container" style="margin-top: 64px;">
		<table align="center" cellspacing="0" width="70%" style="margin: auto; margin-top: 64px;">
			<form action="simpan-edit-pinjam.php" method="post">
				<tr>
					<td colspan="2"><h2 align="center">Edit Pinjaman</h2></td>
				</tr>
				<?php
				$nim=$_GET['editpinjam'];
				$q=mysqli_query($connect, "select * from mahasiswa where nim='$nim'");
				$a=mysqli_fetch_array($q);
				?>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" class="input" value="<?=$a['nim']?>"></td>
				</tr>
				<tr>
					<td>Nama Mahasiswa</td>
					<td><input type="text" name="nama_mhs" class="input" value="<?=$a['nama_mhs']?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" class="input" value="<?=$a['kelas']?>"></td>
				</tr>
				<tr>
					<td>Judul Buku</td>
					<td><input type="text" name="judul_buku" class="input" value="<?=$a['judul_buku']?>"></td>
				</tr>
				<tr>
					<td colspan="2" style="padding-bottom: 16px;">
						<input type="reset" class="submit" value="reset">
						<input type="submit" class="submit right" value="selesai">
					</td>
				</tr>
			</form>
		</table>
</div>

</body>
</html>
