<?php
session_start();
require_once("../../vendor/autoload.php");
use APP\Message\Message;
use APP\Utility\Utility;
use APP\Utility\Config;
use APP\User\User;


$user = new User();
//utility::dd($_REQUEST);
$user->cardPrepare($_REQUEST);
$user->cardUpdate();

?>                         