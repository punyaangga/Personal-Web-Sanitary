<?php
require_once ('koneksi.php');
$id=$_POST['id'];
$judul=$_POST['judul'];
$isi=$_POST['isi'];
	$simpan=mysqli_query($con,"UPDATE info set judul='$judul',isi='$isi'where id='$id'") or die(mysql_error());
	
	header("location:../info.php");

	
?>
