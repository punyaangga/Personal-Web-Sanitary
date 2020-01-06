<?php
require_once ("koneksi.php");
$id=$_POST['id'];
$ig=$_POST['ig'];
$fb=$_POST['fb'];
$twitter=$_POST['twitter'];




	$simpan=mysqli_query($con,"UPDATE sosmed set ig='$ig',fb='$fb',twitter='$twitter' where id='$id'") or die(mysql_error());
	
	header("location:../kontak.php");

	
?>
