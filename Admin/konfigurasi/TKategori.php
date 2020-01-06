<?php
require_once("koneksi.php");
$nama=$_POST['nama'];
$keterangan=$_POST['ket'];

mysqli_query($con,"INSERT INTO kategori VALUES(' ','$nama','$keterangan')")or die (mysql_error());
header("location:../kategori.php");
?>