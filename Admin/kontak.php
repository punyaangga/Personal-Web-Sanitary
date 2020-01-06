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
					<a href="produk.php" >Produk</a>
				</li>
				<li>
					<a href="info.php" >Info Tetang Kami</a>
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
					<b><center>Kontak Kami</center></b>
					<hr>
				</div>
				

				
				<center>
				<div id="outtable">
				  <table>
				  	<thead>
				  		<tr>
				  			<th class="short">Alamat</th>
				  			<th class="short">Mobile</th>
				  			<th class="normal">Email</th>
				  			<th class="short">Aksi</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				  			<?php
								require_once("konfigurasi/koneksi.php");
								$query=mysqli_query($con,"SELECT * FROM kontak");
								$no=1;
								while ($data=mysqli_fetch_array($query)) {												
								?>
				  		
				  			<td><?php echo $data['alamat'];?></td>
				  			<td><?php echo $data['mobile'];?></td>
				  			<td><?php echo $data['email'];?></td>
				  			<td>
				  				<a href="FBalas.php?id=<?php echo $data['id'];?>">Edit</a>
								
				  			</td>
				  			
				  		</tr>
				  <?php
							$no++;
			        	}?>	

				  	</tbody>
				  </table>
				</div>
				</center>
				
				
			</div>

			<div class="konten">
				<div class="post-info">
					<b><center>Sosial Media</center></b>
					<hr>
				</div>
				

				
				<center>
				<div id="outtable1">
				  <table>
				  	<thead>
				  		<tr>
				  			<th class="short">Instagram</th>
				  			<th class="short">Facebook</th>
				  			<th class="normal">Twitter</th>
				  			<th class="short">Aksi</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				  			<?php
								require_once("konfigurasi/koneksi.php");
								$query=mysqli_query($con,"SELECT * FROM sosmed");
								$no=1;
								while ($data=mysqli_fetch_array($query)) {												
								?>
				  		
				  			<td><?php echo $data['ig'];?></td>
				  			<td><?php echo $data['fb'];?></td>
				  			<td><?php echo $data['twitter'];?></td>
				  			<td>
				  				<a href="FSEdit.php?id=<?php echo $data['id'];?>">Edit</a>
								
				  			</td>
				  			
				  		</tr>
				  <?php
							$no++;
			        	}?>	

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