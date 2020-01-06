<?php
require_once ('koneksi.php');
$username=$_POST['username'];
$namaL=$_POST['namaL'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$jk=$_POST['jk'];
$telp=$_POST['telp'];

	$simpan=mysqli_query($con,"UPDATE user set namaL='$namaL',password='$password',email='$email',jk='$jk',telp='$telp'  where username='$username'") or die(mysql_error());
	
	header("location:../user.php");

	
?>
