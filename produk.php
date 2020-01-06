<!DOCTYPE html>
<html>
<head>
	<title><?php
			include "judul.php";
		?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/prod.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slide.css">
</head>
<body>
	<div class="wrapper">
		<div class="menu">
			<?php include ("menu.php");?>
		</div>
		<div class="header">
			<div class="slideshow-container">

					  <div class="mySlides fade">
						<img src="assets/image/4.jpg" style="width:100%">
					  </div>

					  <div class="mySlides fade">
						<img src="assets/image/5.jpg" style="width:100%">
					  </div>

					  <div class="mySlides fade">
						<img src="assets/image/6.jpg" style="width:100%">
					  </div>
				
			</div><br><br><br><br><br><br>
		</div>
		<div  class="konten">

			<div class="pencarian">
				<div class="box">
				  <div class="container-1">
					<form>
				      <span class="icon"><i class="fa fa-search"></i></span>
				      <input type="search" id="search" placeholder="Search..." />
					</form><br>
				  </div>

					<a href="produk.php"><div class="all active">> All Product</div></a>
					<?php
					require_once("admin/konfigurasi/koneksi.php");
					$query=mysqli_query($con,"SELECT * FROM kategori");
						while ($data=mysqli_fetch_array($query)) {
					?>
					<a href="produkk.php?nama=<?php echo $data['nama'];?>"><div class="snt">><?php echo $data['nama'];?> </div></a>
					<?php
					}
				?>
				</div>
			</div>	<center><label class="jkategori">Semua Produk</label></center>
			<?php
					require_once("admin/konfigurasi/koneksi.php");
					$query=mysqli_query($con,"SELECT * FROM produk");
						while ($data=mysqli_fetch_array($query)) {
					?>
			<div class="even1">
				<center>
				<img src="<?php echo "Admin/file/".$data['gambar']; ?>" class="gambarE">
				</center>
				<div class="k1">

						<h1 class="fJudul"><?php echo $data['namaB'];?></h1>
						<br>
						<label id="flabel">Harga : Rp.<?php echo $data['harga'];?></label>
						<br>
						<label id="flabel">Stok : <?php echo $data['stok'];?></label>
						<br>
						<label id="flabel"><?php echo substr($data['keterangan'],0, 45);?>...</label>
						<br>
						<a href="infoProduk.php?id=<?php echo $data['id'];?>"><input class="s1" type="submit" name="READ MORE" value="READ MORE"></a>
				</div>
				
				
			</div>
			<?php
					}
				?>	
			

		</div>
			<div class="footer">
				<div class="footer">
					<?php include ("footer.php");?>
				</div>
			</div>
	</div>
</body>
</html>
<script>

	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}


/*

*/
</script>