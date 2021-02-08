<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">

		<div id="header">
			<h1>Snack</h1>
			
		</div>

		<div id="menu">
			<a class="selected" href="utama.php">Home</a>
			
		</div>

		<div id="sidebar">
			<div style="text-align: center;">
			<div class="body">
				<img class="crispy " src="snack.jpg">
			</div>
		</div>

		<div id="content">
			<div class="title">&raquo; Proses Belanja Selesai</div>
			
			<?php
			if($_POST['finish']){
				session_destroy();
				echo'<div style="text-align: center;">';
				echo 'Terima kasih Anda sudah berbelanja di Toko Online kami. Dan berikut ini adalah data yang perlu Anda catat.';
				echo '<p>Total biaya untuk pembelian Produk adalah Rp '.$_POST['total'].' dan biaya bisa di kirimkan melalui Rekening Bank BCA cabang Singosari dengan nomor rekening xxxx-xxxx-xxxx atas nama Nick.</p>';
				echo '<p>Dan barang akan kami kirim ke alamat di bawah ini:</p>';
				echo '<p>Nama Lengkap : '.$_POST['nama'].'<br>';
				echo 'Alamat Lengkap : '.$_POST['alamat'].'</p>';

				echo 'Terima Kasih';
			}else{
				header("Location: index.php");
			}
			?>

		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; Nick
		</div>

	</div>

</body>
</html>
