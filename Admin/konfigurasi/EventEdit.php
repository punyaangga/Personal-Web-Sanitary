<?php
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
		
		$id=$_POST['id'];
		$judul=$_POST['judul'];
		$isi=$_POST['isi'];
		$tanggal=$_POST['tanggal'];
		$lokasi=$_POST['lokasi'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../file/'.$nama);
					$query = mysqli_query($con,"UPDATE event set gambar='$nama',judul='$judul',isi='$isi',tanggal='$tanggal',lokasi='$lokasi' WHERE id='$id'") or die (mysql_error());
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
		
