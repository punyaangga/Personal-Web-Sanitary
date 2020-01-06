<html>
<head>
	<title>
		<?php
			include "judul.php";
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/event.css">
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
					require_once("admin/konfigurasi/koneksi.php");
					$query=mysqli_query($con,"SELECT * FROM event");
						while ($data=mysqli_fetch_array($query)) {
					?>
				<div class="even1" >
					
					<img src="<?php echo "Admin/file/".$data['gambar']; ?>" class="gambarE">
					<div class="k1"><h3>Lokasi : <?php echo $data['lokasi'];?></h3>
						<h4> <?php echo $data['judul'];?></h4>
						 
						<p> <?php echo substr($data['isi'],0, 45);?>...</p>
						<a href="infoEvent.php?id=<?php echo $data['id'];?>"><input class="s1" type="submit" name="READ MORE" value="READ MORE"></a>
					</div>
				</div>
				<?php
					}
				?>	
				
				
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