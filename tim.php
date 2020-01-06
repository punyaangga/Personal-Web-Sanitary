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
				<div class="ang2">
					<div class="ko1"><h6>ABOUT AS</h6>
						<h5 class="h5">Devi Fajar Wati</h5>
						<p>3411171112</p>
						<p>Web Developer</p>
						<a href="#"><input class="s1" type="submit" value="READ MORE"></a>
					</div>
				</div>
				<div class="ang1">
					<div class="ko1"><h6>ABOUT AS</h6>
						<h5 class="h5">Angga Fantiya Hermawan</h5>
						<p>3411171142</p>
						<p>Web Developer</p>
						<a href="#"><input class="s1" type="submit" name="READ MORE" value="READ MORE"></a>
					</div>
				</div>
				<div class="ang3">
					<div class="ko1"><h6>ABOUT AS</h6>
						<h5 class="h5">Ahsin Fauzi</h5>
						<p>3411171157</p>
						<p>Web Developer</p>
						<a href="#"><input class="s1" type="submit" name="READ MORE" value="READ MORE"></a>
					</div>
				</div>
				<div class="ang4">
					<div class="ko1"><h6>ABOUT AS</h6>
						<h5 class="h5">Panji Septiawan</h5>
						<p>3411171174</p>
						<p>Web Developer</p>
						<a href="#"><input class="s1" type="submit" name="READ MORE" value="READ MORE"></a>
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