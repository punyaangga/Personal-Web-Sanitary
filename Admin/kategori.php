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
					<b><center>Kategori</center></b>
					<hr>
				</div>
				<button class="tombol" onclick="myFunction()" >Hide / Show Form Tambah Data</button>

					<div id="myDIV">
						<form method="POST" action="konfigurasi/TKategori.php" class="login-form">
							<div class="input-container">
								
								<input type="text" class="input" name="nama" placeholder="Nama Kategori"/>
							</div>
							
							
							<div class="input-container">
								<textarea class="input" placeholder="Keterangan " name="ket"></textarea>
													
							</div>
													
							<input type="submit" class="button" value="Simpan">
							
						</form>
						<br>
					</div>

					<script>
					function myFunction() {
					  var x = document.getElementById("myDIV");
					  if (x.style.display === "none") {
					    x.style.display = "block";
					  } else {
					    x.style.display = "none";
					  }
					}
					</script>
				<center>
				<div id="outtable">

				  <table>
				  	<thead>
				  		<tr>
				  			<th class="short">No</th>
				  			<th class="normal">Kategori</th>
				  			<th class="normal">Keterangan</th>
				  			<th class="normal">Aksi</th>
				  						  			
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				  			<?php
							require_once("konfigurasi/koneksi.php");
									$query=mysqli_query($con,"SELECT * FROM Kategori");
									$no=1;
									while ($data=mysqli_fetch_array($query)) {
										
										
										
								?>
								<td><?php echo $no;?></td>
								<td><?php echo $data['nama'];?></td>
								<td><?php echo $data['keterangan']?></td>
								
								<td>
									<a href="FEKategori.php?id=<?php echo $data['id'];?>">Edit</a>
									<a href="konfigurasi/HKategori.php?id=<?php echo $data['id'];?>">Hapus</a>
								</td>
							</tr>
							<?php
							$no++;
								}
							?>
				  		</tr>
				 

				  	</tbody>
				  </table>
				</div>
				</center>
				
				
			</div>
			
			

			
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
 
</body>
</html>