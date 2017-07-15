<?php
session_start();
require_once("vendor/autoload.php");
use APP\Message\Message;
use APP\Utility\Utility;
use APP\Utility\Config;
use APP\Auth\Auth;
$new_login = new Auth();
$check=$new_login->is_loggedin();
if($check){
    Utility::redirect("views/dashboard/index.php");
}
header("Location:views/login/login.php");

?>