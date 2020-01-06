<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="assets/css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

	<body>
		<footer class="footer-distributed">
			

			<div class="footer-center">
				<?php
					require_once("admin/konfigurasi/koneksi.php");
					$query=mysqli_query($con,"SELECT * FROM kontak");
					while ($data=mysqli_fetch_array($query)) {
				?>	
				<div>
					
					<i class="fa fa-map-marker"></i>
					<p><span><?php echo $data['alamat'];?></span></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p><span><?php echo $data['mobile'];?></span></p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><span><?php echo $data['email'];?></span></p>
				</div>

			</div>
			<?php			
				}
			?>	

			<div class="footer-right">
				<?php
					require_once("admin/konfigurasi/koneksi.php");
					$query=mysqli_query($con,"SELECT * FROM sosmed");
					while ($data=mysqli_fetch_array($query)) {
				?>	
				<p class="footer-company-about">
					<span>Social Media</span>
					<a href="<?php echo $data['fb'];?>" target="blank"><img src="assets/image/fb.png"></a>
					<a href="<?php echo $data['ig'];?>" target="blank"><img src="assets/image/ig.png"></a>
					<a href="<?php echo $data['twitter'];?>" target="blank"><img src="assets/image/twitter.png"></a>
					
				</p>


				<?php			
				}
			?>	

			</div>
			

		</footer>

	</body>

</html>
