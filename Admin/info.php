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
					<a href="info.php" class="aktif">Info Tetang Kami</a>
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
					<b><center>Info</center></b>
					<hr>
				</div>
				

					
				<center>
				<div id="outtable">
				  <table>
				  	<thead>
				  		<tr>
				  			<th class="short">No</th>
				  			<th class="normal">Nama Perusahaan</th>
				  			<th class="normal">Isi Post</th>
				  			<th class="normal">Aksi</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				  			<?php
								require_once("konfigurasi/koneksi.php");
								$query=mysqli_query($con,"SELECT * FROM info");
								$no=1;
								while ($data=mysqli_fetch_array($query)) {												
								?>
				  			<td><?php echo $no;?></td>
				  			<td><?php echo $data['judul'];?></td>
				  			<td><?php echo $data['isi'];?></td>
				  			<td>
				  				<a href="FEInfo.php?id=<?php echo $data['id'];?>">Edit</a>
								
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