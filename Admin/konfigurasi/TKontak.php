<?php
require_once ("koneksi.php");
$id=$_POST['id'];
$alamat=$_POST['alamat'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];




	$simpan=mysqli_query($con,"UPDATE kontak set alamat='$alamat',mobile='$mobile',email='$email' where id='$id'") or die(mysql_error());
	
	header("location:../kontak.php");

	
?>
