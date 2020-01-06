<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
   <title>  <?php
      include "../judul.php";
    ?></title>
    
  <link rel="stylesheet" href="assets/css/login.css">

  </head>

  <body>
    <div class="login-form">
      <img src="assets/images/logo.png" class="logo">

      <form class="form-signin" action="konfigurasi/login.php" method="POST">       
      <center><h2 class="form-signin-heading">Login Admin </h2></center>
      
      <div class="form-group ">
      <span>Masukan Username :</span>
      <input type="text" class="form-control" name="username" placeholder="Username" required=""  />
      </div>

      <div class="form-group ">
      <span>Masukan Password : </span>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
      </div>     
      <input type="submit" value="Login" class="log-btn" type="submit"> 
       <center> <p class="tulisan">&copy Devi,Angga,Ahsin,Panji || Informatika Unjani</p></center>  
    </form>
  
    </div>  
    
  </body>
</html>
