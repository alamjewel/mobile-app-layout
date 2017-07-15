<?php
session_start();
require_once("../../vendor/autoload.php");
use APP\Message\Message;
use APP\Utility\Utility;
use APP\Utility\Config;
use APP\User\feedback;


$feedback = new feedback();
//utility::dd($_REQUEST);
$feedback->prepare($_REQUEST)->store();

?>                           