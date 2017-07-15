<?php
 require_once '../layout/header.php';
use APP\Message\Message;
use APP\User\User;

$login_user=$_SESSION['username'];
$card = new User();
$cards=$card->paymentView($login_user);

?>
<div class="col-md-4"></div>
<div class="col-md-4">
    <div>
        <?php 
            if((array_key_exists('Message',$_SESSION))&&!empty($_SESSION['Message'])){
            echo Message::flush();
            }
        ?>
    </div>
    <table class="table table-bordered">
        <th class="well" colspan="2"><center><i><span class="card2"><?php echo $login_user;?></span></i> Credit Card info</center></th>
        <tr><td class="success">Card Type</td><td class="danger"><?php echo $cards->card_type;?></td></tr>
        <tr><td class="success">Card Number</td><td class="danger"><?php echo $cards->card_number;?></td></tr>
        <tr><td class="success">Expire Date</td><td class="danger"><?php echo $cards->expire;?></td></tr>
        <tr><td class="success">CVC Code</td><td class="danger"><?php echo $cards->cvc;?></td></tr>
        <tr><td colspan="2"><a class="btn btn-lg btn-primary btn-block" href="card_upadate.php">Update</a></td></tr>
    </table>
    </div>
<?php require_once '../layout/footer.php';?>