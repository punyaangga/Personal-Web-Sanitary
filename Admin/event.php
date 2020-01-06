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
					<b><center>Event</center></b>
					<hr>
				</div>
				<button class="tombol" onclick="myFunction()" >Hide / Show Form</button>

					<div id="myDIV">
						
						<form method="post" action="konfigurasi/TEvent.php" class="login-form"  enctype="multipart/form-data">
							<div class="input-container">
								<label>Upload Gambar :(MAX SIZE 1MB)</label>
								<input type="file" class="input" name="file" />
							</div>
							<div class="input-container">
								<label>Judul Event : </label>
								<input type="text" class="input" name="judul"/>
							</div>

							
							
							<div class="input-container">
								<label>Isi Event : </label>
								<textarea name="isi" class="input"></textarea>
							</div>
							<div class="input-container">
								<label>Tanggal : </label>
								<input type="date" class="input" name="tanggal" />
							</div>
							
							<div class="input-container">
								<label>Lokasi : </label>
								<input type="text" class="input" name="lokasi" />
							</div>
							
							
							<input type="submit" name="upload"class="button" value="Simpan">
							
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
				  			<th class="short">Gambar</th>
				  			<th class="normal">Judul Event</th>
				  			<th class="normal">Isi Event</th>
				  			<th class="normal">Tanggal</th>
				  			<th class="normal">Lokasi</th>
				  			<th class="normal">Aksi</th>
				  						  			
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php
							require_once("konfigurasi/koneksi.php");
							$query=mysqli_query($con,"SELECT * FROM event");
							$no=1;
							while ($data=mysqli_fetch_array($query)) {												
						?>
				  		<tr>
				  			<td><?php echo $no;?></td>
				  			<td><img class="gmb"src="<?php echo "file/".$data['gambar']; ?>"</td>
				  			<td><?php echo $data['judul'];?></td>
				  			<td><?php echo substr($data['isi'],0,100);?>...</td>
				  			<td><?php echo $data['tanggal'];?></td>
				  			<td><?php echo $data['lokasi'];?></td>
				  			<td>
				  				<a href="FEvent.php?id=<?php echo $data['id'];?>">Edit</a> |<a href="konfigurasi/HEvent.php?id=<?php echo $data['id'];?>"> Hapus</a></td>
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