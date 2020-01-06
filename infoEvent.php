<html>
<head>
	<title>
		<?php
			include "judul.php";
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/prod.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slide.css">
</head>
<body>
	<div class="wrapper">
		<div class="menu">
			<?php
				include("menu.php");
			?>
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
		<div class="konten">
			<?php
					require_once ("Admin/konfigurasi/koneksi.php");
					$id=$_GET['id'];

					$query = mysqli_query($con,"SELECT * FROM event WHERE id='$id'");
					while ($data = mysqli_fetch_array($query)){ ?>

			<div class="pos">
				<div class="pgambar">
					<img src="<?php echo "Admin/file/".$data['gambar']; ?>" class="gmb">
				</div>
				<label class="ljudul"><?php echo $data['judul'];?> </label>
				<label class="lkonten"><?php echo $data['isi'];?></label>
				

			</div>	
			<div class="pos1">
				<label class="pnama">Tanggal Acara : <?php echo $data['tanggal'];?></label>
				<br>
				<label class="pnama">Lokasi Acara : <?php echo $data['lokasi'];?></label>
				


			</div>
			<?php
	}

		?>
		</div>		
				
		<div class="footer">
			<?php
				include("footer.php");
			?>
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