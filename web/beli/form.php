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
			
		<div id="content">
			<div class="title">&raquo; Nama Produk </div>
			
			<?php produk();

				
			
			?>
		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; Nick
		</div>

	</div>

</body>
</html>



<table  border='1' Width='800'>  
<tr>
    <th> Nama </th>
    <th> Jenis Kelamin </th>
    <th> Kelas </th>
    <th> Alamat </th>
    
</tr>

<?php

$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'cart';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
?>

<center> 
MENAMPILKAN DATA SISWA 
<br>
<br>



<table  border='1' Width='800'>  
<tr>
    <th> ID</th>
    <th> Nama Produk </th>
    <th> Keterangan</th>
    <th> Harga </th>
    <th> Jumlah </th>
</tr>

<?php  

$query= Select * From cart

$hasil=MySQL_query ($query);


while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo    
        <tr>
        <td>.$data[produk_id].</td>
        <td>.$data[produk_nama].</td>
        <td>.$data[produk_keterangan].</td>
        <td>.$data[produk_harga].</td>
		<td>.$data[produk_jumlah].</td>
        
        </tr> 
        ;
        
}

?>

</table>