<?php
include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

$judul=$_POST['judul'];
$isi=$_POST['isi'];
$tanggal=$_POST['tanggal'];
$lokasi=$_POST['lokasi'];

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../file/'.$nama);
					$query = mysqli_query($con,"INSERT INTO event VALUES('','$nama','$judul','$isi','$tanggal','$lokasi')");
					if($query){
						header("location:../event.php");
					}else{
						header("location:gagalE.html");
					}
				}else{
					header("location:fileE.html");
				}
			}else{
				header("location:ekstensiE.html");
				
			}
		}















