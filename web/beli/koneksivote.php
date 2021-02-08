<?php
// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "cart";

// Koneksi dan memilih database di server
$con = mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database,$con) or die("Database tidak bisa dibuka");
?>