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
					<a href="info.php">Info Tetang Kami</a>
				</li>
				<li>
					<a href="kontak.php">Kontak Kami</a>
				</li>
				<li>
					<a href="event.php">Event</a>
				</li>
				<li>
					<a href="user.php"class="aktif">Managemen User</a>
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
					<b><center>Management User</center></b>
					<hr>
				</div>
				<button class="tombol" onclick="myFunction()" >Hide / Show Form Tambah User</button>

					<div id="myDIV">
						
						<form method="post" action="konfigurasi/TUser.php" class="login-form">
							<div class="input-container">
								<input type="text" class="input" name="namaL" placeholder="Nama Lengkap"/>
							</div>
							
							<div class="input-container">
								<input type="text" class="input" name="username" placeholder="Username"/>
							</div>

							<div class="input-container">
								<input type="password" class="input" name="password" placeholder="Password"/>
							</div>
							<div class="input-container">
								<input type="email" class="input" name="email" placeholder="Email"/>
							</div>
							<div class="input-container">
								<label>Jenis Kelamain :</label>
								<select name="jk">
									<option values="Laki-Laki">Laki-Laki</option>
									<option values="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="input-container">
								<input type="number" class="input" name="telp" placeholder="Nomor Telp"/>
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
				
				
				  <table>
				  	<thead>
				  		<tr>
				  			<td class="short">No</td>
				  			<td class="Normal">Nama </td>
				  			<td class="normal">Username</td>
				  			<td class="normal">Password</td>
				  			<td class="normal">Email</td>
				  			<td class="normal">Jenis Kelamin</td>
				  			<td class="normal">No Telp</td>
				  			<td class="normal">Aksi</td>
				  						  			
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				  			<?php
							require_once("konfigurasi/koneksi.php");
									$query=mysqli_query($con,"SELECT * FROM user");
									$no=1;
									while ($data=mysqli_fetch_array($query)) {
										
										
										
								?>
								<td><?php echo $no;?></td>
								<td><?php echo $data['namaL'];?></td>
								<td><?php echo $data['username']?></td>
								<td><input type="password" class="pwd" value="<?php echo substr($data['password'], 25)?>" disabled></td>
								<td><?php echo $data['email']?></td>
								<td><?php echo $data['jk']?></td>
								<td><?php echo $data['telp']?></td>
								
								
								
								
								<td>
									<a href="FEUser.php?username=<?php echo $data['username'];?>">Edit</a>
									<a href="konfigurasi/HUser.php?username=<?php echo $data['username'];?>">Hapus</a>
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
			
			

			
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
 
</body>
</html>