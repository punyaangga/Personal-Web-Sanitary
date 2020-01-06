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
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
					<a href="dashboard.php"class="aktif" >Home</a>
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
 
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>Jam</h2>
					<div id="watch">
						<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
							<script type="text/javascript">
							    $(document).ready(function(){
							        function clock() {
							          var now = new Date();
							          var secs = ('0' + now.getSeconds()).slice(-2);
							          var mins = ('0' + now.getMinutes()).slice(-2);
							          var hr = now.getHours();
							          var Time = hr + ":" + mins + ":" + secs;
							          document.getElementById("watch").innerHTML = Time;
							          requestAnimationFrame(clock);
							        }

							        requestAnimationFrame(clock);
							    });
							</script>
					</div>
			</div>
			
		</aside>
		<!-- akhir bagian sidebar website -->
 
		<!-- bagian konten Blog -->
		<div class="blog">
			<a href="produk.php">
			<div class="dashboard">
				<div class="post-info">
					<b><center>Produk</center></b>
					<hr>
				</div>
				<center><img src="assets/images/ui/keranjang.png"></center>
				
			</div>
			</a>

			<a href="info.php">
			<div class="dashboard">
				<div class="post-info">
					<b><center>Info Tentang Kami</center></b>
					<hr>
				</div>
				<center><img src="assets/images/ui/info.png"></center>
				
			</div>
			</a>

			<a href="event.php">
			<div class="dashboard">
				<div class="post-info">
					<b><center>Event</center></b>
					<hr>
				</div>
				<center><img src="assets/images/ui/event.png"></center>
				
			</div>
			</a>

			<a href="kontak.php">
			<div class="dashboard">
				<div class="post-info">
					<b><center>Kontak Kami</center></b>
					<hr>
				</div>
				<center><img src="assets/images/ui/keranjang.png"></center>
				
			</div>
			</a>

			<a href="user.php">
			<div class="dashboard">
				<div class="post-info">
					<b><center>Managemen User </center></b>
					<hr>
				</div>
				<center><img src="assets/images/ui/user.png"></center>
			
			</div>
		</a>
			<a href="kategori.php">	
			<div class="dashboard">
				<div class="post-info">
					<b><center>Kategori</center></b>
					<hr>
				</div>
				<center><img src="assets/images/ui/kategori.png"></center>
				
			</div>
			</a>


			
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
 
</body>
</html>