<?php
require_once('koneksi.php');
$judul=$_POST['judul'];
$isi=$_POST['isi'];
mysql_query("INSERT INTO info VALUES ('','$judul','$isi')") or die(mysql_error());
header('location:../info.php');
?>