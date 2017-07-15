<?php require_once '../layout/header.php';
use APP\Message\Message;
use APP\Utility\Config;
?>
<div class="col-md-4"></div>
<div class="col-md-4">
    <center>
    <h3>Welcome <span class="card1"><?php echo $login_user;?></span></h3>
  <p>This is demo</p>
  <p>You can see Profile & Payment info only</p>
  <p>App is under construction</p>
  </center>
    <div>
        <?php 
            if((array_key_exists('Message',$_SESSION))&&!empty($_SESSION['Message'])){
            echo Message::flush();
            }
        ?>
    </div>
  <div class="well well-sm"><center>Feedback</center></div>
  <form role="form" action="feedback.php" method="post">
      <input type="hidden" name="username" class="form-control" value="<?php echo $login_user;?>" >
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" name="subject" class="form-control" id="subject">
  </div>
  <div class="form-group">
    <label for="pwd">Comment:</label>
    <textarea name="comment" class="form-control" id="pwd"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Post</button>
</form>
  <br>
  <?php 
  use APP\User\feedback;
  
  $comment= new Feedback();
  $comments=$comment->show();
  ?>
  <h2>Comments</h2>
  
  <hr>
  
  <?php foreach($comments as $comment): ?>
<table class="table table-bordered">
    <tr><th><img class="img-responsive" src="../../assets/img/comment.png"></th><th class="success"><?php echo $comment['subject'];?></th></tr>
    <tr><td colspan="2" class="cm"><?php echo $comment['comment'];?></span></td></tr>
    <tr><td width="50"><img class="img-responsive" src="../../assets/img/arrow.png"></td><td><i>comment by </i><span class="card2"><?php echo $comment['username'];?></span> at <span class="card1"><?php echo $comment['date'] . " " .$comment['time'] ;?></span> </td></tr>
    
        
  </table>
  <br>
  <?php endforeach; ?>
  <center><h4>APP Creation &copy; 2016 | <small>Design by <?php echo Config::DEVELEOPER;?></small></h4></center>
</div>


<?php require_once '../layout/footer.php';?>