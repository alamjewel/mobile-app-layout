<?php
session_start();
require_once("../../vendor/autoload.php");
use APP\Message\Message;
use APP\Utility\Utility;
use APP\Utility\Config;
use APP\Auth\Auth;

$new_login = new Auth();
if(isset($_REQUEST['submit'])){
 $new_login->loginPrepare($_REQUEST)->loginCheck();   
}
else{
    Message::set('<div class="alert alert-warning"><strong>Something is Wrong. Try Again!</strong></div>');
    Utility::redirect(login.php);
}


?>