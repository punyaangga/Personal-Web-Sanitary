<!DOCTYPE html>
<html>
<head>
	<title>Admin Toko..</title>
	<link rel="stylesheet" type="text/css" href="assets/css/produk.css">
	<title>
			<?php
			include "../judul.php";
		?>
	</title>
</head>
<body>
	
	<!-- bagian header template -->
	<header>
		<h1 class="judul">Selamat datang ...</h1>
		<p class="deskripsi">Dasboard Admin</p>
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
					<a href="produk.php">Produk</a>
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
			</ul>
		</nav>
		<!-- akhir bagian menu -->
 
		
 
		<!-- bagian konten Blog -->
		<div class="bkonten">
			
			<div class="konten">
				<div class="post-info">
					<b><center>Edit Kategori</center></b>
					<hr>
				</div>
				<?php
					require_once ("konfigurasi/koneksi.php");
					$id=$_GET['id'];

					$query = mysqli_query($con,"SELECT * FROM Kategori WHERE id='$id'");
					while ($data = mysqli_fetch_array($query)){ ?>
					<div id="myDIV">
						<form method="POST" action="konfigurasi/KategoriEdit.php" class="login-form">
							
								
								<input type="hidden" class="input" name="id" value="<?php echo $data['id'];?>"/>
							
							<div class="input-container">
								
								<input type="text" class="input" name="nama" value="<?php echo $data['nama'];?>"/>
							</div>
							
							
							<div class="input-container">
								<textarea class="input" name="ket"><?php echo $data['keterangan'];?></textarea>
													
							</div>
													
							<input type="submit" class="button" value="update">
							
						</form>
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