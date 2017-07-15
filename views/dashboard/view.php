<?php
 require_once '../layout/header.php';
 use APP\Message\Message;
 use APP\User\User;

$login_user=$_SESSION['username'];
$profile = new User();
$profiles=$profile->view($login_user);

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
                <th class="well" colspan="2"><center><i><span class="card2"><?php echo $login_user;?></span></i> Profile info</center></th>
                <tr><td class="success">Full Name</td><td class="danger"><?php echo $profiles->firstname." ".$profiles->lastname;?></td></tr>
                <tr><td class="success">Address</td><td class="danger"><?php echo $profiles->address1.",".$profiles->address2;?></td></tr>
                <tr><td class="success">City</td><td class="danger"><?php echo $profiles->city;?></td></tr>
                <tr><td class="success">State</td><td class="danger"><?php echo $profiles->state;?></td></tr>
                <tr><td class="success">Email</td><td class="danger"><?php echo $profiles->email;?></td></tr>
                <tr><td class="success">Mobile</td><td class="danger"><?php echo $profiles->mobile;?></td></tr>

            </table>
        </div>

<?php require_once '../layout/footer.php';?>
