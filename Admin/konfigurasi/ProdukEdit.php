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
			$namaBarang=$_POST['namaBarang'];
			$kategori=$_POST['kategori'];
			$harga=$_POST['harga'];
			$keterangan=$_POST['ket'];
			$jumlah=$_POST['jml'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../file/'.$nama);
					$query = mysqli_query($con,"UPDATE produk set namaB='$namaBarang',gambar='$nama',kategori='$kategori',harga='$harga',keterangan='$keterangan',stok='$jumlah' WHERE id='$id'");
					if($query){
						header("location:../produk.php");
					}else{
						header("location:gagal.html");
					}
				}else{
					header("location:file.html");
				}
			}else{
				header("location:ekstensi.html");
				
			}
		}
		
