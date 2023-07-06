<?php 
session_start();
session_destroy();
setcookie("USUARIO", ""); 
header("location:index.php");

 ?>