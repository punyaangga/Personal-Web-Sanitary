<!DOCTYPE html>
<html>
<head> 
	<title>
		<?php
			include "judul.php";
		?>

	</title>	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slide.css">

	<title></title>
</head>
<body>
	<div class="wrapper">
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
			<div class="profil">
				<div class="kotak"> 
				<h2>COMPANY PROFILE</h2>
				<?php
					require_once("admin/konfigurasi/koneksi.php");
					$query=mysqli_query($con,"SELECT * FROM info");
						while ($data=mysqli_fetch_array($query)) {
				?>
				<h1> <?php echo $data['judul'];?></h1>

				<p><?php echo $data['isi'];?></p>
			</div>	
			<?php
							
								}
							?>	
			</div>	
			<div class="gambar">
				<img src="assets/image/keluarga.png" height="100%" width="500px" align="right" >
			</div>
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