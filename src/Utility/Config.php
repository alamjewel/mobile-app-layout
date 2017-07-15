<?php
namespace  APP\Utility;




class Config {
    const APPNAME           = 'APP Creation | APP ::';
    const DEVELEOPER        = '<a href="http://www.facebook.com/ebongbd">bAdBoY</a>';
    const HOSTNAME          = 'localhost';
    const DBNAME            = 'app';
    const DBUSER            = 'root';
    const DBPASS            = '';
    //const UPLOAD_DIR    = DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;
    const WEBROOT           = 'http://localhost/app/';
    const IS_SECURE         = FALSE;
    const DEBUG_MODE        = TRUE;
    
    static public function db(){
    $conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("app");
    if(!$db){
        echo("Database Connection Failed") or die();
    }
}
    
    
}

?>
