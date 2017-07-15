<?php
session_start();
session_destroy();
$_SESSION['username']=array();
header("Location:../../index.php")
?>