<?php 
session_start();
echo session_destroy();
echo header("location:index.php");
?>