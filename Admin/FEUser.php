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
					<b><center>Edit User</center></b>
					<hr>
				</div>
				<?php
					require_once ("konfigurasi/koneksi.php");
					$username=$_GET['username'];

					$query = mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
					while ($data = mysqli_fetch_array($query)){ ?>
					<div id="myDIV">
						<form method="POST" action="konfigurasi/UserEdit.php" class="login-form">


							<div class="input-container">
							<label>Nama : </label>
								<input type="text" class="input" name="namaL" value="<?php echo $data['namaL'];?>"/>
							</div>


							<div class="input-container">
							<label>Username :</label>
								<input type="text" class="input" name="username" value="<?php echo $data['username'];?>" readonly/>
							</div>
							<div class="input-container">
							<label>Password :</label>
								<input type="password" class="input" name="password" value="<?php echo $data['password'];?>"/>
							</div>
							<div class="input-container">
							<label>Email :</label>
								<input type="text" class="input" name="email" value="<?php echo $data['email'];?>"/>
							</div>
							<div class="input-container">
							<label>Jenis Kelamin :</label>
							<select name="jk">
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
								</div>
							<div class="input-container">
							<label>Telp :</label>
								<input type="text" class="input" name="telp" value="<?php echo $data['telp'];?>"/>
							</div>
							
							
													
							<input type="submit" class="button" value="update">
							
						</form>
						<div class="login-form">
						<a href="user.php"><button class="button">Cancel</button></a>
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