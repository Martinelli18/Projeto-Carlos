<!DOCTYPE html>
<?php include("logica-usuario.php");?>
<html>
<title>WhaToWatch</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index.php" class="w3-padding-large w3-white">Home</a></li>
  <li class="w3-hide-small"><a href="consulta-2.php" class="w3-padding-large w3-hover-white">Catalogo</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">About Us</a></li>
  <?php if(usuarioEstaLogado()){?>
  <li class="w3-right w3-hide-medium"><a href="profile.php" class="w3-padding-large w3-hover-white">Profile</a></li> <?php } else {?> 
 <li class="w3-hide-small w3-right"><a href="formulario-login.php" class="w3-padding-large w3-white " ><i class="fa fa-user fa-lg" aria-hidden="true"></i></a></li>
  <?php }?>
 </ul>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
  <ul class="w3-navbar w3-left-align w3-large w3-black">
    <li><a class="w3-padding-large" href="consulta-2.php">Catalogo</a></li>
    <li><a class="w3-padding-large" href="#">About Us</a></li>
	<?php if(usuarioEstaLogado()){?>
	<li class="w3-right w3-hide-medium">Profile</li> <?php } else {?> 
	 <li><a class="w3-padding-large" href="formulario-login.php">Login</i></a></li>
	 <?php }?>
  </ul>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


</script>



<!--<div class="container" >
 <div class="principal" >-->