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
					<a href="kontak.php" class="aktif">Kontak Kami</a>
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
					<b><center>Edit Social Media</center></b>
					<hr>
				</div>
				<?php
					require_once ("konfigurasi/koneksi.php");
					$id=$_GET['id'];

					$query = mysqli_query($con,"SELECT * FROM sosmed WHERE id='$id'");
					while ($data = mysqli_fetch_array($query)){ ?>
					<div id="myDIV">
						<form method="POST" action="konfigurasi/TSosmed.php" class="login-form">
							
								
								<input type="hidden" class="input" name="id" value="<?php echo $data['id'];?>"/>
							
							<div class="input-container">
								<label>Instagram :</label>
								<input type="url" class="input" name="ig" value="<?php echo $data['ig'];?>"/>
							</div>
							
							<div class="input-container">
								<label>Facebook :</label>
								<input type="url" class="input" name="fb" value="<?php echo $data['fb'];?>"/>
							</div>
							
							<div class="input-container">
								<label>Twitter</label>
								<input type="url" class="input" name="twitter" value="<?php echo $data['twitter'];?>"/>
							</div>
							
							<input type="submit" class="button" value="update">
							
						</form>
						<div class="login-form">
						<a href="info.php"><button class="button">Cancel</button></a>
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