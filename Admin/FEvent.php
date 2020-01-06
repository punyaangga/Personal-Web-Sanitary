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
	<title>
			<?php
			include "../judul.php";
		?>
	</title>
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
					<a href="produk.php" >Produk</a>
				</li>
				<li>
					<a href="info.php">Info Tetang Kami</a>
				</li>
				<li>
					<a href="kontak.php">Kontak Kami</a>
				</li>
				<li>
					<a href="event.php" class="aktif">Event</a>
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
					<b><center>Edit Event</center></b>
					<hr>
				</div>
					<div id="myDIV">
							<?php
					require_once ("konfigurasi/koneksi.php");
					$id=$_GET['id'];

					$query = mysqli_query($con,"SELECT * FROM event WHERE id='$id'");
					while ($data = mysqli_fetch_array($query)){ ?>
						
						<form method="post" action="konfigurasi/EventEdit.php" class="login-form"  enctype="multipart/form-data">
							<input type="hidden" class="input" name="id" value="<?php echo $data['id'];?>"/>
							<div class="input-container">
								<label>Upload Gambar :(MAX SIZE 1MB)</label>
								<input type="file" class="input" name="file" required/>
							</div>
							<div class="input-container">
								<label>Judul Event : </label>
								<input type="text" class="input" name="judul" value="<?php echo $data['judul'];?>"/>

							</div>

							
							
							<div class="input-container">
								<label>Isi Event : </label>
								<textarea name="isi" class="input"><?php echo $data['isi'];?></textarea>
							</div>
							<div class="input-container">
								<label>Tanggal : </label>
						
								<input type="date" class="input" name="tanggal"value="<?php echo $data['tanggal'];?>" required />
							</div>
							
							<div class="input-container">
								<label>Lokasi : </label>
								<input type="text" class="input" name="lokasi" value="<?php echo $data['lokasi'];?>"/>
							</div>
							
							
							<input type="submit" name="upload"class="button" value="Simpan">
							
						</form>
						<div class="login-form">
						<a href="event.php"><button class="button">Cancel</button></a>
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