<?php 
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
if($cek>0){
    $user = mysql_fetch_array($query);
    session_start();
    $_SESSION['username'] = $username['username'];
    header("location:utama.php");
}else{
    header("location:login.php");
?>