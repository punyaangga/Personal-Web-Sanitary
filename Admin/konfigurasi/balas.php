<?php
require_once ('koneksi.php');
$id=$_POST['id'];
$judul=$_POST['judul'];
$komentar=$_POST['komentar'];
	$simpan=mysql_query("UPDATE info set judul='$judul',komentar='$komentar',balas=$komentar where id='$id'") or die(mysql_error());
	
	//header("location:../info.php");

	
?>
