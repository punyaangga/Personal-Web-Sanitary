<?php
		require_once("admin/konfigurasi/koneksi.php");
		$query=mysqli_query($con,"SELECT * FROM info");
		while ($data=mysqli_fetch_array($query)) {
  	    echo $data['judul'];				
}
?>	