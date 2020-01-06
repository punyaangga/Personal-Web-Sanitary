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
					<b><center>Produk</center></b>
					<hr>
				</div>
				<button class="tombol" onclick="myFunction()" >Hide / Show Form</button>

					<div id="myDIV">
						
						<form method="post" action="konfigurasi/TProduk.php" class="login-form" enctype="multipart/form-data">
							<div class="input-container">
								<input type="text" class="input" name="namaBarang" placeholder="Nama Barang"/>
							</div>

							<div class="input-container">
								<label>Upload Gambar : (Max Size 1MB)</label>
								<input type="file" class="input" name="file"/>
							</div>

							<div class="input-container">
								<label>Kategori </label>
								<select name="kategori">
									<?php
										require_once("konfigurasi/koneksi.php");
										$query=mysqli_query($con,"SELECT * FROM Kategori");
										$no=1;
										while ($data=mysqli_fetch_array($query)) {												
									?>
									<option values="<?php echo $data['nama'];?>"><?php echo $data['nama'];?></option>
								<?php
								$no++;
								}?>	
								</select>
								
							</div>
							<div class="input-container">
								
								<input type="number" class="input" name="harga" placeholder="Harga Barang"/>
							</div>
							<div class="input-container">
								<textarea class="input" placeholder="Keterangan Barang" name="ket"></textarea>
													
							</div>
							<div class="input-container">
								
								<input type="number" class="input" name="jml" placeholder="Jumlah Barang"/>
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
				  			<th class="normal">Nama Barang</th>
				  			<th class="normal">Kategori</th>
				  			<th class="normal">Harga</th>
				  			<th class="normal">Keterangan</th>
				  			<th class="normal">Jumlah</th>
				  			<th class="normal">Aksi</th>
				  						  			
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php
							require_once("konfigurasi/koneksi.php");
							$query=mysqli_query($con,"SELECT * FROM produk");
							$no=1;
							while ($data=mysqli_fetch_array($query)) {												
						?>
				  		<tr>
				  			<td><?php echo $no;?></td>
				  			<td><img class="gmb"src="<?php echo "file/".$data['gambar']; ?>"></td>
				  			<td><?php echo $data['namaB'];?></td>
				  			<td><?php echo $data['kategori'];?></td>
				  			<td><?php echo $data['harga'];?></td>
				  			<td><?php echo substr($data['keterangan'],0,100);?>...</td>
				  			<td><?php echo $data['stok'];?></td>
				  			<td>
				  				<a href="FEProduk.php?id=<?php echo $data['id'];?>">Edit</a> |<a href="konfigurasi/HProduk.php?id=<?php echo $data['id'];?>"> Hapus</a></td>
				  			
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