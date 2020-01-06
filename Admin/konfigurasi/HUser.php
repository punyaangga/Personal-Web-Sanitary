<?php
include ("koneksi.php");
$username=$_GET['username'];

$simpan=mysqli_query($con,"DELETE FROM user WHERE username='$username'")or die(mysql_error());
header('location:../user.php');
?>