
<?php

require_once ('koneksi.php');
$id=$_POST['id'];
$nama=$_POST['nama'];
$keterangan=$_POST['ket'];
	$simpan=mysqli_query($con,"UPDATE kategori set nama='$nama',keterangan='$keterangan'where id='$id'") or die(mysql_error());
	
	header("location:../kategori.php");

	
?>
