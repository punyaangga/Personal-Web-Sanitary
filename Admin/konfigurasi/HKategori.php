<?php
include ("koneksi.php");
$id=$_GET['id'];

$simpan=mysqli_query($con,"DELETE FROM kategori WHERE id='$id'")or die(mysql_error());
header('location:../kategori.php');
?>