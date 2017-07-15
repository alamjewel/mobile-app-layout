<?php
 require_once '../layout/header.php';
 use APP\User\User;

$login_user=$_SESSION['username'];
$profile = new User();
$profiles=$profile->view($login_user);
?>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-primary">
    <div class="panel-heading"><center><h3>Update Personal Info</h3></center></div>
      <div class="panel-body">
          <form class="form-horizontal"action="update.php" method="post" role="form">
              <input type="hidden" name="id" class="form-control" value="<?php echo $profiles->id;?>">
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">First Name</span>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $profiles->firstname;?>" placeholder="First Name" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Last Name</span>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $profiles->lastname;?>"placeholder="Last Name" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Address Line 1</span>
                    <input type="text" name="address1" class="form-control" value="<?php echo $profiles->address1;?>" placeholder="Address Line 2" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Address Line 2</span>
                    <input type="text" name="address2" class="form-control" value="<?php echo $profiles->address2;?>" placeholder="Address Line 2" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">City</span>
                    <input type="text" name="city" class="form-control" value="<?php echo $profiles->city;?>" placeholder="City" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">State</span>
                    <select name="state" class="form-control">
                        <option selected>Select State</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="District Of Columbia">District Of Columbia</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-earphone"></span></span>
                    <input type="text" name="mobile" class="form-control" value="<?php echo $profiles->mobile;?>" placeholder="Mobile" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="text" name="email" class="form-control" value="<?php echo $profiles->email;?>" placeholder="Email" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="text" name="Password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                </div>
              </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-lg btn-danger btn-block">Reset</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Update</button>
                    </div>
                </div>
          </form>
      </div>
    </div>
</div>
<?php require_once '../layout/footer.php';?>

