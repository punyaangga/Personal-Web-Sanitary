<?php 
include 'konfigurasi/koneksi.php';
session_start();
if($_SESSION['status'] !="login"){
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>	<?php
			include "../judul.php";
		?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/produk.css">
	
</head>
<body>
	
	<!-- bagian header template -->
	<header>
		<h1 class="judul">Selamat datang <?php echo $_SESSION['username'];?></h1>
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="dashboard.php">Home</a>
				</li>
				<li>
					<a href="produk.php" class="aktif">Produk</a>
				</li>
				<li>
					<a href="info.php">Info Tetang Kami</a>
				</li>
				<li>
					<a href="kontak.php">Kontak Kami</a>
				</li>
				<li>
					<a href="event.php">Event</a>
				</li>
				<li>
					<a href="user.php">Managemen User</a>
				</li>
				<li>
					<a href="konfigurasi/logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->
 
		
 
		<!-- bagian konten Blog -->
		<div class="bkonten">
			
			<div class="konten">
				<div class="post-info">
					<b><center>Edit Produk</center></b>
					<hr>
				</div>
				<div id="myDIV">
						<?php
					require_once ("konfigurasi/koneksi.php");
					$id=$_GET['id'];

					$query = mysqli_query($con,"SELECT * FROM produk WHERE id='$id'");
					while ($data = mysqli_fetch_array($query)){ ?>
						<form method="post" action="konfigurasi/ProdukEdit.php" class="login-form" enctype="multipart/form-data">
							<input type="hidden" class="input" name="id" value="<?php echo $data['id'];?>"/>

							<div class="input-container">
								<label>Nama Barang</label>
								<input type="text" class="input" name="namaBarang" 
								value="<?php echo $data['namaB'];?>"/>
							</div>

							<div class="input-container">
								<label>Upload Gambar : (Max Size 1MB)</label>
								<input type="file" class="input" name="file" required/>
							</div>

							
							<div class="input-container">
								<label>Kategori </label>
								<input type="text" class="input" 
								value="<?php  echo $data['kategori'];?>" disabled/>
								<label>Rubah Menjadi : </label>
								<select name="kategori">
									<?php
										require_once("konfigurasi/koneksi.php");
										$queryy=mysqli_query($con,"SELECT * FROM Kategori");
										while ($dataa=mysqli_fetch_array($queryy)) {												
									?>
									<option values="<?php echo $data['nama'];?>"><?php echo $dataa['nama'];?></option>
								<?php
								
								}?>	
								</select>
								
							</div>
							<div class="input-container">
								<label>Harga Barang : </label>
								<input type="number" class="input" name="harga" 
								value="<?php  echo $data['harga'];?>"/>
							</div>
							<div class="input-container">
								<label>Keterangan Barang :</label>
								<textarea class="input"  name="ket"><?php  echo $data['keterangan'];?></textarea>
													
							</div>
							<div class="input-container">
								<label>Jumlah Barang :</label>
								<input type="number" class="input" name="jml" value="<?php  echo $data['stok'];?>"/>
							</div>
							
							<input type="submit" name="upload"class="button" value="upload">

							
						</form>
						<div class="login-form">
						<a href="produk.php"><button class="button">Cancel</button></a>
						</div>
						<?php
	}

		?>
						<br>
					</div>

					
			</div>
			
			

			
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
 
</body>
</html>