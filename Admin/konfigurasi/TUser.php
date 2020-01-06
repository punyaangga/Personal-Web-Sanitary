<?php
require_once('koneksi.php');
$namaL=$_POST['namaL'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$jk=$_POST['jk'];
$telp=$_POST['telp'];
mysqli_query($con,"INSERT INTO user VALUES('$namaL','$username','$password','$email','$jk','$telp')") or die(mysql_error());
header("location:../user.php");
?>