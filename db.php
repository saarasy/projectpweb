<?php
$connect = mysqli_connect("localhost","root","","perpustakaan");

function say($pesan, $lokasi){
	$a = "
	<script>
	window.alert('$pesan');
	window.location='$lokasi';
	</script>
	";
	return $a;
}




?>