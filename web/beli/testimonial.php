<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
<script type='text/JavaScrip'>
var myRedirect = function(){
	window.location.href = 'Some other location';
	}
</script>
<meta charset="UTF-8">
 <title>Snack</title>
 
 <link rel="stylesheet" href="nav.css">
 <link rel="stylesheet" style="img.css">
 <meta charset="UTF-8">
</head>
<body>
<header>
  <nav class="navbar">
  <div class="container">
  <a href="" class="logo">
   <img src="lo.png" alt="Logo" class="img-responsive">
   <span></span>
  </a>
   <ul>
    <li><a href=""><i class="fa fa-home"></i> &nbsp;Beranda</a></li>
    <li><a href=""><i class="fa fa-phone"></i> &nbsp;Kontak</a></li>
    <li><a href="">Katagori&nbsp;<i class="fa fa-angle-down"></i> </a></li>
   </ul>
  </div>
 </nav> 
</header>
</br/>
</body>
<style>
.aligncenter{
clear:both;

margin-left:auto;
margin-:auto;
.widget {
  text-align: center;
} 
}
   img {
	
     width: 300px;
     height: 250px;
     border: 5px solid white;
     padding: 1px;
	 
   }
</style>
<head>
	<title>Belanja</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style="text-align: center;">
	<div id="container">

		<div id="header">
			<h1>Belanja</h1>
			
		</div>

		<div id="menu">
		
			<a href="index.php">Home</a>
			<a class="selected" href="testimonial.php">Testimonial</a>
		</div>

		<div id="sidebar">
			<div class="title">&raquo; Keranjang Belanja</div>
			<div class="body">
				<?php cart(); ?>
			</div>

			<div class="title">&raquo; Tentang</div>
			<img class="gambar2" src="2.jpg"  width=”20″ heigth=”40″ >
		</div>

		<div id="content">
			<div class="title">&raquo; Testimonial</div>
			Tulis Testimonial Anda di bawah ini:
			<form action="" method="post">
				<p><input type="text" name="nama" placeholder="Nama Lengkap" required></p>
				<p><input type="text" name="mail" placeholder="Email Valid" required></p>
				<p><textarea name="pesan" rows="5" cols="40" placeholder="Testimonial Anda" required></textarea></p>
				<p><input type="submit" name="submit" value="Proses"></p>
			</form>
		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; 2013 TUTORIALWEB.NET<br>Thanks to phpacademy.org
		</div>

	</div>

</body>
</html>