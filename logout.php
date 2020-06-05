<?php
session_start();
$_SESSION['em'] == null;
unset($_SESSION['em']);
session_destroy();
header('Location: /TOPACIO_PROJECT/adminlogin.php');
?>