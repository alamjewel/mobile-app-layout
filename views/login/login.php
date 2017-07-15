<?php
session_start();
require_once("../../vendor/autoload.php");
use APP\Message\Message;
use APP\Utility\Utility;
use APP\Utility\Config;
use APP\Auth\Auth;
$new_login = new Auth();
$check=$new_login->is_loggedin();
if($check){
    Utility::redirect("../dashboard/index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo Config::APPNAME;?> Login</title>
        <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="../../assets/css/custom.css">
    </head>
    <body>
        <div class="panel panel-primary">
            <div class="panel-heading"><center><h1>App Creation<center></h1></center></div>
            <div class="panel-body">
                <div class="row" id="pwd-container">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <section class="login-form">
                            <form method="post" action="login_success.php" role="login">
                                <img src="../../assets/img/login.png" width="100" height="50"class="img-responsive" alt="" />
                               <div>
                                <?php 
                                if((array_key_exists('Message',$_SESSION))&&!empty($_SESSION['Message'])){
                                echo Message::flush();
                                }
                                ?>
                            </div>
                                <input type="text" name="username" placeholder="Username" required class="form-control input-lg" required>
                                <br>
                                <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required>
                                <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                <div>
                                    <a href="../register/register.php">Create account</a> or <a href="#">reset password</a>
                                </div>
                            </form>
                        </section>
                    </div>
                    <div class="col-md-4"></div>
                    
                </div>
                
            </div>
            <center><h4>APP Creation &copy; 2016 | <small>Design by <?php echo Config::DEVELEOPER;?></small></h4></center>
        </div>
        <script src="../../assets/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            $('.alert').fadeOut(3000);
        </script>
    </body>
</html>
