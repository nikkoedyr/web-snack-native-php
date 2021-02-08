<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
<head>
<script type='text/JavaScrip'>

</script>
<meta charset="UTF-8">
 <title>Snack</title>

</head>
<body>

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

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style="text-align: center;">
	<div id="container">

		<div id="header">
			<h1>Snack</h1>
			
		</div>

		<div id="menu">
			<a class="selected" href="utama.php">Home</a>
			
		</div>

		<div id="sidebar">
			<div class="title">&raquo; Keranjang Belanja</div>
			<div class="body">
			
			
			
			
			
			<div style="text-align: center;">
				<?php cart(); 
			
				?>
			</div>

			<div class="title">&raquo; Info </div>
			<a div style="text-align: center;" href='vote5.php'>
			<img class="crispy " src="6.jpg"></a>
		</div>

		<div id="content">
			<div class="title">&raquo; Nama Produk </div>
			
			<?php produk6();

				
			
			?>
		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; Nick
		</div>

	</div>

</body>
</html>