<?php
include ("koneksi.php");
$id=$_GET['id'];

$simpan=mysql_query("DELETE FROM info WHERE id='$id'")or die(mysql_error());
header('location:../info.php');
?>