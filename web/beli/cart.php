<?php
require_once("config.php");

if(isset($_GET['add'])){
	$id = mysql_real_escape_string((int)$_GET['add']);
	$qt = mysql_query("SELECT produk_id, produk_jumlah FROM tw_produk WHERE produk_id='$id'");
	while($qt_row = mysql_fetch_assoc($qt)){
		if($qt_row['produk_jumlah'] != $_SESSION['cart_'.$_GET['add']] && $qt_row['produk_jumlah'] > 0){
			$_SESSION['cart_'.$_GET['add']]+='1';
			header("");
		} else {
			echo '<script language="javascript">alert("Stok produk tidak mencukupi!"); document.location="index.php";</script>';
		}
	}

}

function cart(){
	
	foreach($_SESSION as $name => $value){
		if($value > 0){
			if(substr($name, 0, 5) == 'cart_'){
				$id = substr($name, 5, (strlen($name)-5));
				$get = mysql_query("SELECT * FROM tw_produk WHERE produk_id='$id'");
				while($get_row = mysql_fetch_assoc($get)){
					$sub = $get_row['produk_harga'] * $value;
					echo '<div style="font-size:11px; margin-bottom:-10px">&raquo; '.$get_row['produk_nama'].' @ Rp. '.$get_row['produk_harga'].' X '.$value.' = Rp. '.$sub.'</div><br>';
				}
			}
			$total += $sub;
		}
	}
	if($total == 0){
		echo 'Keranjang Belanja Kosong!';
	} else {
		echo '<div style="text-align: center;"><div style="text-align:center; font-size:11px;"><a href="detail.php">&raquo; Detail &laquo;</a></div>';
	}
}

function produk(){
	$sql = mysql_query("SELECT * FROM tw_produk ORDER BY produk_id DESC");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index10.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk1(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '1'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}


function produk2(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '2'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index2.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk3(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '3'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index3.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk4(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '4'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index4.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk5(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '5'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index5.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk6(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '6'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index6.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk7(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '7'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index7.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk8(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '8'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index8.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk9(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '9'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index9.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}

function produk10(){
	$sql = mysql_query("SELECT * FROM tw_produk WHERE produk_id LIKE '10'");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item" >
			<div style="text-align: center;">
				<b>'.$row['produk_nama'].'</b>
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index10.php?add='.$row['produk_id'].'"><div style="text-align: center;">Beli</a></b>
			</div>
			';
		}
	}
}
?>