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
    <div class="well well-sm"><center><i><span class="card2"><?php echo $login_user;?></span></i> Credit Card info</center></div>
    
    <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="../../assets/img/card.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" action="card_upadate_success.php" method="post" id="payment-form">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $cards->id;?>" placeholder="CVC" autocomplete="cc-csc" required >
                        <div class="form-group">
                            <center>
                                <div class="well well-sm">Card Type</div>
                                <label class="radio-inline"><input type="radio" class="card" disabled name="card_type" <?php if($cards->card_type=="VISA Card"){echo "checked";} ?> value="VISA Card"><span class="card1">VISA Card</span></label>
                                <label class="radio-inline"><input type="radio" class="card" disabled name="card_type" <?php if($cards->card_type=="Master Card"){echo "checked";} ?> value="Master Card"><span class="card2">Master Card</span></label>
                            </center>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control card" name="card_number" disabled placeholder="Valid Card Number" autocomplete="cc-number" value="<?php echo $cards->card_number;?>" required autofocus >
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control card" name="expire" placeholder="MM / YY" disabled autocomplete="cc-exp" value="<?php echo $cards->expire;?>" required >
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input type="tel" class="form-control card" name="cvc" value="<?php echo $cards->cvc;?>" placeholder="CVC" autocomplete="cc-csc" disabled required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-block btn-lg btn-primary cardedit" type="button">Update</button>
                                <button class="btn btn-block btn-lg btn-success cardsave" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
<?php require_once '../layout/footer.php';?>