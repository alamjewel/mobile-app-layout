<?php
namespace APP\User;
use APP\Message\Message;
use APP\Utility\Utility;
use APP\Utility\Config;



class Feedback{
    
    public $subject="";
    public $comment="";
    public $username="";
    
    
    
   public function __construct(){
       Config::db();
        
    }
    public function prepare($data=array()){
        //Utility::dd($data);
        if(is_array($data) && array_key_exists('username', $data)){
            $this->subject    =   $data['subject'];
            $this->comment       =   $data['comment'];
            $this->username     =   $data['username'];
        }
        return $this;
    }
    public function store(){
        //Utility::dd($this->username);
        date_default_timezone_set("Asia/Dhaka");
        $date=date('M,d Y');
        $time=date('h:i:s');
        $sql="INSERT INTO feedback(subject, comment, username, date, time) VALUES('".$this->subject."','".$this->comment."','".$this->username."','$date', '$time')";
        //Utility::dd($sql);
        $result=mysql_query($sql);
        if($result){
            Message::set('<div class="alert alert-success"><strong>Feedback Added.Thank You</strong></div>');
        }else{
            //echo "failed";
            Message::set('<div class="alert alert-warning"><strong>Something is Wrong. Try Again!</strong></div>');
        }
        Utility::redirect('index.php');
    }
    
    public function show(){
            $comment=array();
            $sql="SELECT * FROM feedback ORDER BY  `id` DESC";
            $result=mysql_query($sql);
            while ($row = mysql_fetch_assoc($result)) {
            $comment[]=$row;
        }
        return $comment;
    }
    
    
}

?>
