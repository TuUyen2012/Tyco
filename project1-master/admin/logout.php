<?php 
session_start();
session_destroy();
setcookie('ma_admin','',time()-1000);
header('location:index.php');