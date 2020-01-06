<html>
	<head>
		<title>
			<?php
			include "judul.php";
			?>
		</title>
		<link rel="stylesheet" type="text/css" href="assets/css/stylee.css">
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
			
			<div class="konten">
				<div class="konten1">
					<div class="k1"><h6>ABOUT AS</h6>
						<h5>Company Profile</h5>
						<p>Didirikan pada tahun 1997 memasuki</p>
						<p>saniter di pasar Indonesia.</p>
						<a href="tentangkami.php"><input class="s1" type="submit" name="READ MORE" value="READ MORE"></a>
					</div>
				</div>
				<div class="konten2">
					<div class="k1"><h6>BROWSE</h6>
						<h5>Our Products</h5>
						<p>Dapatkan detail produk selengkapnya</p>
						<p>lini produk di sini.</p>
						<a href="produk.php"><input class="s1" type="submit" value="BROWSE"></a>
					</div>
				</div>
				<div class="konten3">
					<div class="k1"><h6>EVENT</h6>
						<h5>Search for Our Events</h5>
						<p>Hadiri Event selengkapnya tentang kami</p>
						<p>lini event di sini.</p>
						<a href="event.php"><input class="s1" type="submit" value="FOLLOW US"></a>
					</div>
				</div>
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