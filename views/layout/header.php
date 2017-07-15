<?php
session_start();
require_once("../../vendor/autoload.php");
use APP\Message\Message;
use APP\Utility\Utility;
use APP\Utility\Config;
use APP\Auth\Auth;
$new_login = new Auth();
$check=$new_login->is_loggedin();
$login_user="";
$login_user=$_SESSION['username'];
if(!$check){
    Message::set('<div class="alert alert-success"><strong>Please Login to View The Content!</strong></div>');
    Utility::redirect("../../index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo Config::APPNAME;?> Dashboard</title>
        <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="../../assets/css/custom.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">APP Creation</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profile<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="view.php"><span class="glyphicon glyphicon-cog"></span> View</a></li>
                                <li><a href="edit.php"><span class="glyphicon glyphicon-pencil"></span> Update</a></li>
                            </ul>
                        </li>
                        <li><a href="payment.php"><span class="glyphicon glyphicon-credit-card"></span> Payment</a></li>
                        <li><a href="favourate.php"><span class="glyphicon glyphicon-tags"></span>&nbsp; Favourite Food</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            