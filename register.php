<?php 

include 'includes/header.php';

?>
<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-top:20px;">


          <div class="card">
            <div class="card-header">User Registration Form</div>
            <div class="card-body">
                <form method="post" action="reg_process.php">
                    <div class="form-group">
                      <label>Enter Your Name</label>
                      <input type="text" name="user_name" id="user_name" autocomplete="off" class="form-control" required />
                  </div>
                  <div class="form-group">
                      <label>Enter Your Valid Email</label>
                      <input type="email" name="user_email" id="user_email" autocomplete="off"  class="form-control" required />
                  </div>
                  <div class="form-group">
                      <label>Enter Your Roll Number</label>
                      <input type="text" name="user_ph" id="user_ph" autocomplete="off" class="form-control" required />
                  </div>
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="user_password" id="user_password" autocomplete="off" class="form-control" required />
                    <span class="text-danger">Please keep save your password.</span>
                </div>
                <div class="form-group">
                    <input type="submit" name="user_signup" id="user_signup" class="btn btn-primary" value="Signup" />
                </div>
            </form>

        </div>
    </div>

</div>

</div>
</div>
